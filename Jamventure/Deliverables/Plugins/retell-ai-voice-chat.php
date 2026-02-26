<?php
/**
 * Plugin Name: Retell AI Voice Chat
 * Plugin URI: https://yourwebsite.com
 * Description: Add voice AI chat to your WordPress site using Retell AI
 * Version: 1.0.1
 * Author: Your Name
 * Author URI: https://yourwebsite.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: retell-ai-voice-chat
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Main Plugin Class
 */
class Retell_AI_Voice_Chat
{

    /**
     * Plugin version
     */
    const VERSION = '1.0.1';

    /**
     * Option name for settings
     */
    const OPTION_NAME = 'retell_ai_settings';

    /**
     * Constructor
     */
    public function __construct()
    {
        // Admin hooks
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_init', array($this, 'register_settings'));

        // Frontend hooks
        add_action('wp_footer', array($this, 'render_chat_interface'), 999);

        // REST API hooks
        add_action('rest_api_init', array($this, 'register_rest_routes'));

        // Uninstall hook
        register_uninstall_hook(__FILE__, array('Retell_AI_Voice_Chat', 'uninstall'));
    }

    /**
     * Add admin menu page
     */
    public function add_admin_menu()
    {
        add_options_page(
            __('Retell AI Voice Chat Settings', 'retell-ai-voice-chat'),
            __('Retell AI Voice Chat', 'retell-ai-voice-chat'),
            'manage_options',
            'retell-ai-voice-chat',
            array($this, 'render_settings_page')
        );
    }

    /**
     * Register plugin settings
     */
    public function register_settings()
    {
        register_setting(
            'retell_ai_settings_group',
            self::OPTION_NAME,
            array($this, 'sanitize_settings')
        );
    }

    /**
     * Sanitize settings input
     */
    public function sanitize_settings($input)
    {
        $sanitized = array();

        if (isset($input['api_key'])) {
            $sanitized['api_key'] = sanitize_text_field($input['api_key']);
        }

        if (isset($input['agent_id'])) {
            $sanitized['agent_id'] = sanitize_text_field($input['agent_id']);
        }

        if (isset($input['button_text'])) {
            $sanitized['button_text'] = sanitize_text_field($input['button_text']);
        } else {
            $sanitized['button_text'] = 'Talk to Our AI';
        }

        if (isset($input['button_color'])) {
            $sanitized['button_color'] = sanitize_hex_color($input['button_color']);
        } else {
            $sanitized['button_color'] = '#18cc00';
        }

        if (isset($input['button_position'])) {
            $allowed_positions = array('bottom-right', 'bottom-left', 'top-right', 'top-left');
            if (in_array($input['button_position'], $allowed_positions)) {
                $sanitized['button_position'] = $input['button_position'];
            } else {
                $sanitized['button_position'] = 'bottom-right';
            }
        } else {
            $sanitized['button_position'] = 'bottom-right';
        }

        return $sanitized;
    }

    /**
     * Render settings page
     */
    public function render_settings_page()
    {
        // Check user capabilities
        if (!current_user_can('manage_options')) {
            return;
        }

        // Get current settings
        $options = get_option(self::OPTION_NAME, array());
        $api_key = isset($options['api_key']) ? $options['api_key'] : '';
        $agent_id = isset($options['agent_id']) ? $options['agent_id'] : '';
        $button_text = isset($options['button_text']) ? $options['button_text'] : 'Talk to Our AI';
        $button_color = isset($options['button_color']) ? $options['button_color'] : '#18cc00';
        $button_position = isset($options['button_position']) ? $options['button_position'] : 'bottom-right';

        // Show success/error messages
        if (isset($_GET['settings-updated'])) {
            add_settings_error(
                'retell_ai_messages',
                'retell_ai_message',
                __('Settings Saved Successfully', 'retell-ai-voice-chat'),
                'updated'
            );
        }

        settings_errors('retell_ai_messages');
        ?>
        <div class="wrap">
            <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
            <form action="options.php" method="post">
                <?php
                settings_fields('retell_ai_settings_group');
                ?>
                <table class="form-table" role="presentation">
                    <tbody>
                        <tr>
                            <th scope="row">
                                <label for="retell_api_key"><?php _e('Retell API Key', 'retell-ai-voice-chat'); ?></label>
                            </th>
                            <td>
                                <input type="password" id="retell_api_key"
                                    name="<?php echo esc_attr(self::OPTION_NAME); ?>[api_key]"
                                    value="<?php echo esc_attr($api_key); ?>" class="regular-text" autocomplete="off" />
                                <p class="description">
                                    <?php _e('Enter your Retell API key from your Retell dashboard.', 'retell-ai-voice-chat'); ?>
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">
                                <label for="retell_agent_id"><?php _e('Agent ID', 'retell-ai-voice-chat'); ?></label>
                            </th>
                            <td>
                                <input type="text" id="retell_agent_id"
                                    name="<?php echo esc_attr(self::OPTION_NAME); ?>[agent_id]"
                                    value="<?php echo esc_attr($agent_id); ?>" class="regular-text" />
                                <p class="description">
                                    <?php _e('Enter your Retell Agent ID.', 'retell-ai-voice-chat'); ?>
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">
                                <label for="retell_button_text"><?php _e('Button Text', 'retell-ai-voice-chat'); ?></label>
                            </th>
                            <td>
                                <input type="text" id="retell_button_text"
                                    name="<?php echo esc_attr(self::OPTION_NAME); ?>[button_text]"
                                    value="<?php echo esc_attr($button_text); ?>" class="regular-text" />
                                <p class="description">
                                    <?php _e('Text to display on the voice chat button.', 'retell-ai-voice-chat'); ?>
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">
                                <label for="retell_button_color"><?php _e('Button Color', 'retell-ai-voice-chat'); ?></label>
                            </th>
                            <td>
                                <input type="color" id="retell_button_color"
                                    name="<?php echo esc_attr(self::OPTION_NAME); ?>[button_color]"
                                    value="<?php echo esc_attr($button_color); ?>" />
                                <p class="description">
                                    <?php _e('Choose the color for the voice chat button.', 'retell-ai-voice-chat'); ?>
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">
                                <label
                                    for="retell_button_position"><?php _e('Button Position', 'retell-ai-voice-chat'); ?></label>
                            </th>
                            <td>
                                <select id="retell_button_position"
                                    name="<?php echo esc_attr(self::OPTION_NAME); ?>[button_position]">
                                    <option value="bottom-right" <?php selected($button_position, 'bottom-right'); ?>>
                                        <?php _e('Bottom Right', 'retell-ai-voice-chat'); ?>
                                    </option>
                                    <option value="bottom-left" <?php selected($button_position, 'bottom-left'); ?>>
                                        <?php _e('Bottom Left', 'retell-ai-voice-chat'); ?>
                                    </option>
                                    <option value="top-right" <?php selected($button_position, 'top-right'); ?>>
                                        <?php _e('Top Right', 'retell-ai-voice-chat'); ?>
                                    </option>
                                    <option value="top-left" <?php selected($button_position, 'top-left'); ?>>
                                        <?php _e('Top Left', 'retell-ai-voice-chat'); ?>
                                    </option>
                                </select>
                                <p class="description">
                                    <?php _e('Choose where the button appears on your site.', 'retell-ai-voice-chat'); ?>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <?php submit_button(__('Save Settings', 'retell-ai-voice-chat')); ?>
            </form>
        </div>
        <?php
    }

    /**
     * Render complete chat interface with button, styles, and scripts
     */
    public function render_chat_interface()
    {
        $options = get_option(self::OPTION_NAME, array());

        // Only render if API key and Agent ID are set
        if (empty($options['api_key']) || empty($options['agent_id'])) {
            return;
        }

        $button_text = isset($options['button_text']) ? esc_html($options['button_text']) : 'Talk to Our AI';
        $button_color = isset($options['button_color']) ? esc_attr($options['button_color']) : '#18cc00';
        $button_position = isset($options['button_position']) ? $options['button_position'] : 'bottom-right';
        $api_url = esc_url(rest_url('retell/v1/get-token'));
        $nonce = wp_create_nonce('wp_rest');

        // Get position styles
        $position_css = $this->get_position_css($button_position);
        ?>

        <!-- Retell AI Voice Chat Button -->
        <button id="retell-voice-chat-button" style="background-color: <?php echo $button_color; ?>;">
            <svg id="retell-mic-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path>
                <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                <line x1="12" y1="19" x2="12" y2="23"></line>
                <line x1="8" y1="23" x2="16" y2="23"></line>
            </svg>
            <span id="retell-button-text"><?php echo $button_text; ?></span>
        </button>

        <!-- Inline Styles -->
        <style>
            #retell-voice-chat-button {
                position: fixed;
                z-index: 9999;
                padding: 12px 24px;
                border: none;
                border-radius: 50px;
                color: white;
                font-size: 16px;
                font-weight: 600;
                cursor: pointer;
                display: flex;
                align-items: center;
                gap: 8px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
                transition: all 0.3s ease;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                <?php echo $position_css; ?>
            }

            #retell-voice-chat-button:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
            }

            #retell-voice-chat-button:active {
                transform: translateY(0);
            }

            #retell-voice-chat-button.active {
                animation: retell-pulse 2s infinite;
            }

            #retell-mic-icon {
                width: 20px;
                height: 20px;
                flex-shrink: 0;
            }

            @keyframes retell-pulse {

                0%,
                100% {
                    opacity: 1;
                }

                50% {
                    opacity: 0.7;
                }
            }

            @media (max-width: 768px) {
                #retell-voice-chat-button {
                    padding: 10px 20px;
                    font-size: 14px;
                }

                #retell-mic-icon {
                    width: 18px;
                    height: 18px;
                }
            }

            @media (max-width: 480px) {
                #retell-voice-chat-button {
                    padding: 8px 16px;
                    font-size: 13px;
                }
            }
        </style>

        <!-- Inline JavaScript -->
        <script>
            window.retellAISettings = {
                apiUrl: '<?php echo $api_url; ?>',
                nonce: '<?php echo $nonce; ?>',
                buttonText: '<?php echo esc_js($button_text); ?>',
                buttonColor: '<?php echo esc_js($button_color); ?>'
            };
        </script>

        <script src="https://cdn.jsdelivr.net/npm/retell-client-js-sdk@1.6.0/dist/retell-client-js-sdk.min.js"
            onload="initRetellChat()" onerror="console.error('Failed to load Retell SDK')"></script>

        <script>
            function initRetellChat() {
                console.log('=== Retell AI Voice Chat Initialization ===');
                console.log('SDK Loaded:', typeof RetellWebClient !== 'undefined');
                console.log('Settings:', window.retellAISettings);

                if (typeof RetellWebClient === 'undefined') {
                    console.error('✗ RetellWebClient not available');
                    return;
                }

                let retellClient = null;
                let isCallActive = false;

                try {
                    retellClient = new RetellWebClient();
                    console.log('✓ Retell client created');

                    const button = document.getElementById('retell-voice-chat-button');
                    const buttonText = document.getElementById('retell-button-text');
                    const micIcon = document.getElementById('retell-mic-icon');

                    if (!button) {
                        console.error('✗ Button not found');
                        return;
                    }

                    // Event listeners
                    retellClient.on('call_started', function () {
                        console.log('✓ Call started');
                        isCallActive = true;
                        button.classList.add('active');
                        button.style.backgroundColor = '#dc2626';
                        buttonText.textContent = 'End Call';
                        if (micIcon) micIcon.style.display = 'none';
                    });

                    retellClient.on('call_ended', function () {
                        console.log('✓ Call ended');
                        isCallActive = false;
                        button.classList.remove('active');
                        button.style.backgroundColor = window.retellAISettings.buttonColor;
                        buttonText.textContent = window.retellAISettings.buttonText;
                        if (micIcon) micIcon.style.display = 'inline-block';
                    });

                    retellClient.on('error', function (error) {
                        console.error('✗ Retell error:', error);
                        isCallActive = false;
                        alert('Voice chat error: ' + (error.message || 'Unknown error'));
                    });

                    // Button click
                    button.addEventListener('click', async function () {
                        console.log('Button clicked, active:', isCallActive);

                        if (isCallActive) {
                            retellClient.stopCall();
                        } else {
                            try {
                                console.log('→ Getting token...');
                                const response = await fetch(window.retellAISettings.apiUrl, {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-WP-Nonce': window.retellAISettings.nonce
                                    }
                                });

                                console.log('← Response:', response.status);

                                if (!response.ok) {
                                    throw new Error('API request failed: ' + response.status);
                                }

                                const data = await response.json();
                                console.log('← Data:', data);

                                if (data.code && data.message) {
                                    throw new Error(data.message);
                                }

                                if (!data.access_token) {
                                    throw new Error('No access token received');
                                }

                                console.log('→ Starting call...');
                                await retellClient.startCall({
                                    accessToken: data.access_token,
                                    sampleRate: 24000,
                                    captureDeviceId: 'default',
                                    playbackDeviceId: 'default'
                                });

                            } catch (error) {
                                console.error('✗ Error:', error);
                                alert('Failed to start voice chat: ' + error.message);
                            }
                        }
                    });

                    console.log('✓ Retell chat initialized successfully');

                } catch (error) {
                    console.error('✗ Initialization error:', error);
                }
            }

            // Fallback if SDK loads before this script
            if (typeof RetellWebClient !== 'undefined') {
                initRetellChat();
            }
        </script>
        <?php
    }

    /**
     * Get CSS for button position
     */
    private function get_position_css($position)
    {
        switch ($position) {
            case 'bottom-left':
                return 'bottom: 20px; left: 20px;';
            case 'top-right':
                return 'top: 20px; right: 20px;';
            case 'top-left':
                return 'top: 20px; left: 20px;';
            case 'bottom-right':
            default:
                return 'bottom: 20px; right: 20px;';
        }
    }

    /**
     * Register REST API routes
     */
    public function register_rest_routes()
    {
        register_rest_route('retell/v1', '/get-token', array(
            'methods' => 'POST',
            'callback' => array($this, 'get_retell_token'),
            'permission_callback' => '__return_true',
        ));
    }

    /**
     * Get Retell access token
     */
    public function get_retell_token($request)
    {
        $options = get_option(self::OPTION_NAME, array());

        // Validate settings
        if (empty($options['api_key']) || empty($options['agent_id'])) {
            return new WP_Error(
                'missing_settings',
                __('Retell AI settings are not configured properly.', 'retell-ai-voice-chat'),
                array('status' => 500)
            );
        }

        // Prepare API request
        $api_url = 'https://api.retellai.com/v2/create-web-call';
        $body = array(
            'agent_id' => $options['agent_id']
        );

        // Make API request
        $response = wp_remote_post($api_url, array(
            'headers' => array(
                'Authorization' => 'Bearer ' . $options['api_key'],
                'Content-Type' => 'application/json',
            ),
            'body' => json_encode($body),
            'timeout' => 15,
        ));

        // Check for errors
        if (is_wp_error($response)) {
            return new WP_Error(
                'api_error',
                $response->get_error_message(),
                array('status' => 500)
            );
        }

        $response_code = wp_remote_retrieve_response_code($response);
        $response_body = wp_remote_retrieve_body($response);

        if ($response_code !== 200 && $response_code !== 201) {
            return new WP_Error(
                'api_error',
                __('Failed to get access token from Retell API.', 'retell-ai-voice-chat'),
                array('status' => $response_code, 'response' => $response_body)
            );
        }

        $data = json_decode($response_body, true);

        if (!isset($data['access_token'])) {
            return new WP_Error(
                'invalid_response',
                __('Invalid response from Retell API.', 'retell-ai-voice-chat'),
                array('status' => 500)
            );
        }

        return rest_ensure_response(array(
            'access_token' => $data['access_token'],
            'call_id' => isset($data['call_id']) ? $data['call_id'] : null,
        ));
    }

    /**
     * Plugin uninstall cleanup
     */
    public static function uninstall()
    {
        delete_option(self::OPTION_NAME);
    }
}

// Initialize plugin
function retell_ai_voice_chat_init()
{
    new Retell_AI_Voice_Chat();
}
add_action('plugins_loaded', 'retell_ai_voice_chat_init');
