
<?php
// Theme Customizer admin panel
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="speed-epaviste-admin">
    <h1>🎨 Theme Customizer - Speed Épaviste Pro</h1>
    
    <div class="theme-tabs">
        <button class="theme-tab active" data-tab="colors">Couleurs</button>
        <button class="theme-tab" data-tab="typography">Typographie</button>
        <button class="theme-tab" data-tab="layout">Mise en Page</button>
        <button class="theme-tab" data-tab="header">En-tête</button>
        <button class="theme-tab" data-tab="footer">Pied de Page</button>
    </div>

    <div id="colors" class="theme-tab-content active">
        <div class="color-section">
            <h3>Palette de Couleurs</h3>
            <form id="colors-form">
                <div class="color-row">
                    <div class="color-group">
                        <label for="primary_color">Couleur Principale</label>
                        <input type="color" id="primary_color" name="primary_color" class="color-picker" 
                               value="<?php echo esc_attr(get_option('primary_color', '#facc15')); ?>">
                    </div>
                    <div class="color-group">
                        <label for="secondary_color">Couleur Secondaire</label>
                        <input type="color" id="secondary_color" name="secondary_color" class="color-picker" 
                               value="<?php echo esc_attr(get_option('secondary_color', '#eab308')); ?>">
                    </div>
                    <div class="color-group">
                        <label for="text_color">Couleur du Texte</label>
                        <input type="color" id="text_color" name="text_color" class="color-picker" 
                               value="<?php echo esc_attr(get_option('text_color', '#111827')); ?>">
                    </div>
                </div>
                
                <div class="color-row">
                    <div class="color-group">
                        <label for="header_bg_color">Fond En-tête</label>
                        <input type="color" id="header_bg_color" name="header_bg_color" class="color-picker" 
                               value="<?php echo esc_attr(get_option('header_bg_color', '#ffffff')); ?>">
                    </div>
                    <div class="color-group">
                        <label for="header_text_color">Texte En-tête</label>
                        <input type="color" id="header_text_color" name="header_text_color" class="color-picker" 
                               value="<?php echo esc_attr(get_option('header_text_color', '#111827')); ?>">
                    </div>
                    <div class="color-group">
                        <label for="button_color">Couleur Boutons</label>
                        <input type="color" id="button_color" name="button_color" class="color-picker" 
                               value="<?php echo esc_attr(get_option('button_color', '#facc15')); ?>">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="typography" class="theme-tab-content">
        <div class="color-section">
            <h3>Typographie</h3>
            <form id="typography-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="primary_font">Police Principale</label>
                        <select id="primary_font" name="primary_font" class="theme-input">
                            <option value="Inter">Inter</option>
                            <option value="Roboto">Roboto</option>
                            <option value="Open Sans">Open Sans</option>
                            <option value="Lato">Lato</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="heading_font">Police Titres</label>
                        <select id="heading_font" name="heading_font" class="theme-input">
                            <option value="Inter">Inter</option>
                            <option value="Roboto">Roboto</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Poppins">Poppins</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="layout" class="theme-tab-content">
        <div class="color-section">
            <h3>Options de Mise en Page</h3>
            <form id="layout-form">
                <div class="checkbox-group">
                    <label>
                        <input type="checkbox" name="enable_sticky_header" checked>
                        En-tête collant
                    </label>
                    <label>
                        <input type="checkbox" name="enable_smooth_scroll" checked>
                        Défilement fluide
                    </label>
                    <label>
                        <input type="checkbox" name="enable_animations" checked>
                        Animations CSS
                    </label>
                    <label>
                        <input type="checkbox" name="enable_dark_mode">
                        Mode sombre
                    </label>
                </div>
            </form>
        </div>
    </div>

    <div id="header" class="theme-tab-content">
        <div class="color-section">
            <h3>Configuration En-tête</h3>
            <form id="header-form">
                <div class="form-group">
                    <label for="contact_phone">Téléphone de Contact</label>
                    <input type="tel" id="contact_phone" name="contact_phone" class="theme-input" 
                           value="<?php echo esc_attr(get_option('contact_phone', '06 07 38 01 94')); ?>">
                </div>
                <div class="form-group">
                    <label for="contact_email">Email de Contact</label>
                    <input type="email" id="contact_email" name="contact_email" class="theme-input" 
                           value="<?php echo esc_attr(get_option('contact_email', 'contact@speedepaviste.fr')); ?>">
                </div>
                <div class="checkbox-group">
                    <label>
                        <input type="checkbox" name="show_social_links" checked>
                        Afficher les liens sociaux
                    </label>
                    <label>
                        <input type="checkbox" name="show_contact_info" checked>
                        Afficher les infos de contact
                    </label>
                </div>
            </form>
        </div>
    </div>

    <div id="footer" class="theme-tab-content">
        <div class="color-section">
            <h3>Configuration Pied de Page</h3>
            <form id="footer-form">
                <div class="form-group">
                    <label for="footer_text">Texte du Footer</label>
                    <textarea id="footer_text" name="footer_text" class="theme-input" rows="3"
                              placeholder="© 2024 Speed Épaviste. Tous droits réservés."><?php echo esc_textarea(get_option('footer_text', '© 2024 Speed Épaviste. Tous droits réservés.')); ?></textarea>
                </div>
            </form>
        </div>
    </div>

    <div class="form-submit-section">
        <button type="submit" class="button-primary" onclick="saveThemeSettings()">
            Sauvegarder les Paramètres
        </button>
        <button type="button" class="button-secondary" onclick="previewChanges()">
            Aperçu des Modifications
        </button>
        <button type="button" class="button-secondary" onclick="resetThemeSettings()">
            Réinitialiser
        </button>
    </div>
</div>
