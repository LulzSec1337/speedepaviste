
<?php
// Enhanced Theme Customizer admin panel
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="speed-epaviste-admin">
    <div class="dashboard-header">
        <h1>🎨 Theme Customizer Pro</h1>
        <p>Personnalisez l'apparence de votre site avec des options avancées</p>
    </div>

    <div class="theme-tabs">
        <button class="theme-tab active" data-tab="colors">Couleurs</button>
        <button class="theme-tab" data-tab="typography">Typographie</button>
        <button class="theme-tab" data-tab="layout">Mise en Page</button>
        <button class="theme-tab" data-tab="header">En-tête</button>
        <button class="theme-tab" data-tab="footer">Pied de Page</button>
        <button class="theme-tab" data-tab="mobile">Mobile</button>
    </div>

    <div id="colors" class="theme-tab-content active">
        <div class="color-section">
            <h3>Palette de Couleurs</h3>
            <div class="color-row">
                <div class="color-group">
                    <label>Couleur Principale</label>
                    <input type="color" class="color-picker" name="primary_color" 
                           value="<?php echo get_option('primary_color', '#facc15'); ?>">
                    <span class="color-code"><?php echo get_option('primary_color', '#facc15'); ?></span>
                </div>
                <div class="color-group">
                    <label>Couleur Secondaire</label>
                    <input type="color" class="color-picker" name="secondary_color" 
                           value="<?php echo get_option('secondary_color', '#eab308'); ?>">
                    <span class="color-code"><?php echo get_option('secondary_color', '#eab308'); ?></span>
                </div>
                <div class="color-group">
                    <label>Couleur Texte</label>
                    <input type="color" class="color-picker" name="text_color" 
                           value="<?php echo get_option('text_color', '#111827'); ?>">
                    <span class="color-code"><?php echo get_option('text_color', '#111827'); ?></span>
                </div>
                <div class="color-group">
                    <label>Couleur Lien</label>
                    <input type="color" class="color-picker" name="link_color" 
                           value="<?php echo get_option('link_color', '#3b82f6'); ?>">
                    <span class="color-code"><?php echo get_option('link_color', '#3b82f6'); ?></span>
                </div>
            </div>
            
            <h4>Couleurs d'Arrière-plan</h4>
            <div class="color-row">
                <div class="color-group">
                    <label>Arrière-plan Principal</label>
                    <input type="color" class="color-picker" name="bg_color" 
                           value="<?php echo get_option('bg_color', '#ffffff'); ?>">
                    <span class="color-code"><?php echo get_option('bg_color', '#ffffff'); ?></span>
                </div>
                <div class="color-group">
                    <label>Arrière-plan Section</label>
                    <input type="color" class="color-picker" name="section_bg_color" 
                           value="<?php echo get_option('section_bg_color', '#f9fafb'); ?>">
                    <span class="color-code"><?php echo get_option('section_bg_color', '#f9fafb'); ?></span>
                </div>
            </div>

            <h4>Couleurs En-tête</h4>
            <div class="color-row">
                <div class="color-group">
                    <label>Arrière-plan En-tête</label>
                    <input type="color" class="color-picker" name="header_bg_color" 
                           value="<?php echo get_option('header_bg_color', '#ffffff'); ?>">
                    <span class="color-code"><?php echo get_option('header_bg_color', '#ffffff'); ?></span>
                </div>
                <div class="color-group">
                    <label>Texte En-tête</label>
                    <input type="color" class="color-picker" name="header_text_color" 
                           value="<?php echo get_option('header_text_color', '#111827'); ?>">
                    <span class="color-code"><?php echo get_option('header_text_color', '#111827'); ?></span>
                </div>
            </div>
        </div>
    </div>

    <div id="typography" class="theme-tab-content">
        <div class="typography-section">
            <h3>Typographie</h3>
            
            <div class="form-row">
                <div class="form-group">
                    <label>Police Principale</label>
                    <select class="theme-input" name="primary_font">
                        <option value="Inter">Inter (Défaut)</option>
                        <option value="Roboto">Roboto</option>
                        <option value="Open Sans">Open Sans</option>
                        <option value="Poppins">Poppins</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Lato">Lato</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Police Titre</label>
                    <select class="theme-input" name="heading_font">
                        <option value="Inter">Inter (Défaut)</option>
                        <option value="Roboto">Roboto</option>
                        <option value="Playfair Display">Playfair Display</option>
                        <option value="Merriweather">Merriweather</option>
                        <option value="Source Serif Pro">Source Serif Pro</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Taille Texte Base</label>
                    <input type="range" class="font-size-slider" name="base_font_size" 
                           min="14" max="20" value="16" 
                           oninput="updateFontSizePreview('base', this.value)">
                    <span id="base-font-preview">16px</span>
                </div>
                <div class="form-group">
                    <label>Hauteur de Ligne</label>
                    <input type="range" class="line-height-slider" name="line_height" 
                           min="1.2" max="2.0" step="0.1" value="1.6"
                           oninput="updateLineHeightPreview(this.value)">
                    <span id="line-height-preview">1.6</span>
                </div>
            </div>

            <h4>Tailles des Titres</h4>
            <div class="heading-sizes">
                <div class="form-group">
                    <label>H1 (Titre Principal)</label>
                    <input type="range" name="h1_size" min="24" max="48" value="32"
                           oninput="updateHeadingPreview('h1', this.value)">
                    <span id="h1-preview">32px</span>
                </div>
                <div class="form-group">
                    <label>H2 (Sous-titre)</label>
                    <input type="range" name="h2_size" min="20" max="36" value="24"
                           oninput="updateHeadingPreview('h2', this.value)">
                    <span id="h2-preview">24px</span>
                </div>
                <div class="form-group">
                    <label>H3 (Titre Section)</label>
                    <input type="range" name="h3_size" min="16" max="28" value="20"
                           oninput="updateHeadingPreview('h3', this.value)">
                    <span id="h3-preview">20px</span>
                </div>
            </div>
        </div>
    </div>

    <div id="layout" class="theme-tab-content">
        <div class="layout-section">
            <h3>Options de Mise en Page</h3>
            
            <div class="form-row">
                <div class="form-group">
                    <label>Largeur Maximale du Site</label>
                    <select class="theme-input" name="max_width">
                        <option value="1200px">1200px (Standard)</option>
                        <option value="1440px">1440px (Large)</option>
                        <option value="1600px">1600px (Très Large)</option>
                        <option value="100%">100% (Pleine Largeur)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Espacement Sections</label>
                    <input type="range" name="section_spacing" min="40" max="120" value="80"
                           oninput="updateSpacingPreview(this.value)">
                    <span id="spacing-preview">80px</span>
                </div>
            </div>

            <div class="layout-options">
                <h4>Options d'Affichage</h4>
                <div class="checkbox-group">
                    <label>
                        <input type="checkbox" name="boxed_layout">
                        Layout en Boîte
                    </label>
                    <label>
                        <input type="checkbox" name="sticky_header" checked>
                        En-tête Collant
                    </label>
                    <label>
                        <input type="checkbox" name="smooth_scroll" checked>
                        Défilement Fluide
                    </label>
                    <label>
                        <input type="checkbox" name="back_to_top" checked>
                        Bouton Retour en Haut
                    </label>
                </div>
            </div>

            <div class="sidebar-options">
                <h4>Configuration Sidebar</h4>
                <div class="form-group">
                    <label>Position Sidebar</label>
                    <select class="theme-input" name="sidebar_position">
                        <option value="right">Droite</option>
                        <option value="left">Gauche</option>
                        <option value="none">Aucune</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Largeur Sidebar</label>
                    <select class="theme-input" name="sidebar_width">
                        <option value="25%">25%</option>
                        <option value="30%">30%</option>
                        <option value="33%">33%</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div id="header" class="theme-tab-content">
        <div class="header-section">
            <h3>Configuration En-tête</h3>
            
            <div class="form-row">
                <div class="form-group">
                    <label>Style En-tête</label>
                    <select class="theme-input" name="header_style">
                        <option value="default">Standard</option>
                        <option value="centered">Centré</option>
                        <option value="split">Divisé</option>
                        <option value="minimal">Minimal</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Hauteur En-tête</label>
                    <input type="range" name="header_height" min="60" max="120" value="80"
                           oninput="updateHeaderHeightPreview(this.value)">
                    <span id="header-height-preview">80px</span>
                </div>
            </div>

            <div class="logo-options">
                <h4>Configuration Logo</h4>
                <div class="form-row">
                    <div class="form-group">
                        <label>Taille Logo</label>
                        <input type="range" name="logo_size" min="100" max="300" value="150"
                               oninput="updateLogoSizePreview(this.value)">
                        <span id="logo-size-preview">150px</span>
                    </div>
                    <div class="form-group">
                        <label>Position Logo</label>
                        <select class="theme-input" name="logo_position">
                            <option value="left">Gauche</option>
                            <option value="center">Centre</option>
                            <option value="right">Droite</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="navigation-options">
                <h4>Menu Navigation</h4>
                <div class="checkbox-group">
                    <label>
                        <input type="checkbox" name="mega_menu">
                        Méga Menu
                    </label>
                    <label>
                        <input type="checkbox" name="mobile_menu_icon" checked>
                        Icône Menu Mobile
                    </label>
                    <label>
                        <input type="checkbox" name="search_in_header">
                        Recherche dans En-tête
                    </label>
                    <label>
                        <input type="checkbox" name="social_in_header">
                        Réseaux Sociaux dans En-tête
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div id="footer" class="theme-tab-content">
        <div class="footer-section">
            <h3>Configuration Pied de Page</h3>
            
            <div class="form-row">
                <div class="form-group">
                    <label>Style Pied de Page</label>
                    <select class="theme-input" name="footer_style">
                        <option value="default">Standard</option>
                        <option value="minimal">Minimal</option>
                        <option value="extended">Étendu</option>
                        <option value="newsletter">Avec Newsletter</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nombre de Colonnes</label>
                    <select class="theme-input" name="footer_columns">
                        <option value="1">1 Colonne</option>
                        <option value="2">2 Colonnes</option>
                        <option value="3">3 Colonnes</option>
                        <option value="4">4 Colonnes</option>
                    </select>
                </div>
            </div>

            <div class="footer-options">
                <h4>Options d'Affichage</h4>
                <div class="checkbox-group">
                    <label>
                        <input type="checkbox" name="footer_social" checked>
                        Réseaux Sociaux
                    </label>
                    <label>
                        <input type="checkbox" name="footer_contact" checked>
                        Informations Contact
                    </label>
                    <label>
                        <input type="checkbox" name="footer_copyright" checked>
                        Copyright
                    </label>
                    <label>
                        <input type="checkbox" name="back_to_top_footer" checked>
                        Bouton Retour en Haut
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label>Texte Copyright</label>
                <input type="text" class="theme-input" name="copyright_text" 
                       value="<?php echo get_option('copyright_text', '© 2024 Speed Épaviste. Tous droits réservés.'); ?>">
            </div>
        </div>
    </div>

    <div id="mobile" class="theme-tab-content">
        <div class="mobile-section">
            <h3>Optimisation Mobile</h3>
            
            <div class="mobile-options">
                <h4>Navigation Mobile</h4>
                <div class="form-group">
                    <label>Style Menu Mobile</label>
                    <select class="theme-input" name="mobile_menu_style">
                        <option value="slide">Glissement</option>
                        <option value="overlay">Superposition</option>
                        <option value="push">Poussée</option>
                        <option value="dropdown">Déroulant</option>
                    </select>
                </div>
                
                <div class="checkbox-group">
                    <label>
                        <input type="checkbox" name="mobile_sticky_header" checked>
                        En-tête Collant Mobile
                    </label>
                    <label>
                        <input type="checkbox" name="mobile_search">
                        Recherche Mobile
                    </label>
                    <label>
                        <input type="checkbox" name="mobile_call_button" checked>
                        Bouton d'Appel Mobile
                    </label>
                </div>
            </div>

            <div class="mobile-typography">
                <h4>Typographie Mobile</h4>
                <div class="form-row">
                    <div class="form-group">
                        <label>Taille Texte Mobile</label>
                        <input type="range" name="mobile_font_size" min="14" max="18" value="16"
                               oninput="updateMobileFontPreview(this.value)">
                        <span id="mobile-font-preview">16px</span>
                    </div>
                    <div class="form-group">
                        <label>Taille H1 Mobile</label>
                        <input type="range" name="mobile_h1_size" min="20" max="32" value="24"
                               oninput="updateMobileH1Preview(this.value)">
                        <span id="mobile-h1-preview">24px</span>
                    </div>
                </div>
            </div>

            <div class="mobile-spacing">
                <h4>Espacement Mobile</h4>
                <div class="form-group">
                    <label>Espacement Sections Mobile</label>
                    <input type="range" name="mobile_section_spacing" min="20" max="60" value="40"
                           oninput="updateMobileSpacingPreview(this.value)">
                    <span id="mobile-spacing-preview">40px</span>
                </div>
            </div>
        </div>
    </div>

    <div class="customizer-preview">
        <h3>Aperçu en Temps Réel</h3>
        <div class="preview-frame">
            <iframe id="theme-preview" src="<?php echo home_url('/'); ?>" 
                    style="width: 100%; height: 500px; border: 1px solid #ddd; border-radius: 8px;"></iframe>
        </div>
        <div class="preview-controls">
            <button class="button-secondary" onclick="previewDesktop()">🖥️ Desktop</button>
            <button class="button-secondary" onclick="previewTablet()">📱 Tablet</button>
            <button class="button-secondary" onclick="previewMobile()">📱 Mobile</button>
        </div>
    </div>

    <div class="form-submit-section">
        <button type="button" class="button-primary" onclick="saveThemeSettings()">
            Sauvegarder Personnalisations
        </button>
        <button type="button" class="button-secondary" onclick="resetThemeSettings()">
            Réinitialiser
        </button>
        <button type="button" class="button-secondary" onclick="exportThemeSettings()">
            Exporter Config
        </button>
        <button type="button" class="button-secondary" onclick="importThemeSettings()">
            Importer Config
        </button>
    </div>
</div>
