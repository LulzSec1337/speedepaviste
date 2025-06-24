
<?php
// SEO Manager admin panel
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="speed-epaviste-admin">
    <h1>🔍 SEO Manager - Speed Épaviste Pro</h1>
    
    <div class="seo-tabs">
        <button class="seo-tab active" data-tab="general">Général</button>
        <button class="seo-tab" data-tab="meta-tags">Meta Tags</button>
        <button class="seo-tab" data-tab="social-media">Réseaux Sociaux</button>
        <button class="seo-tab" data-tab="indexing">Indexation</button>
        <button class="seo-tab" data-tab="analysis">Analyse</button>
    </div>

    <div id="general" class="seo-tab-content active">
        <div class="seo-section">
            <h3>Configuration SEO Générale</h3>
            <form id="seo-general-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="seo_title">Titre SEO Principal</label>
                        <input type="text" id="seo_title" name="seo_title" class="seo-input" 
                               value="<?php echo esc_attr(get_option('seo_title', 'Speed Épaviste - Enlèvement d\'épave gratuit')); ?>"
                               placeholder="Speed Épaviste - Enlèvement d'épave gratuit">
                        <div class="input-help">Recommandé: 50-60 caractères</div>
                        <div id="title-score" class="seo-score"></div>
                    </div>
                    <div class="form-group">
                        <label for="seo_description">Description Meta</label>
                        <textarea id="seo_description" name="seo_description" class="seo-textarea"
                                  placeholder="Service professionnel d'enlèvement d'épaves gratuit 7j/7 en France..."><?php echo esc_textarea(get_option('seo_description', 'Service professionnel d\'enlèvement d\'épaves gratuit 7j/7 en France. Épaviste agréé VHU pour recyclage écologique.')); ?></textarea>
                        <div class="input-help">Recommandé: 150-160 caractères</div>
                        <div id="desc-score" class="seo-score"></div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="focus_keyword">Mot-clé Principal</label>
                    <input type="text" id="focus_keyword" name="focus_keyword" class="seo-input" 
                           value="<?php echo esc_attr(get_option('focus_keyword', 'épaviste')); ?>"
                           placeholder="épaviste">
                    <div class="input-help">Mot-clé principal pour votre site</div>
                </div>

                <div class="form-group">
                    <label for="seo_keywords">Mots-clés SEO</label>
                    <input type="text" id="seo_keywords" name="seo_keywords" class="seo-input" 
                           value="<?php echo esc_attr(get_option('seo_keywords', 'épaviste, enlèvement épave gratuit, destruction auto, certificat destruction, VHU agréé')); ?>"
                           placeholder="épaviste, enlèvement épave gratuit, destruction auto">
                    <div class="input-help">Séparez les mots-clés par des virgules</div>
                </div>
            </form>
        </div>
    </div>

    <div id="meta-tags" class="seo-tab-content">
        <div class="seo-section">
            <h3>Meta Tags Avancés</h3>
            <form id="meta-tags-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="robots_meta">Robots Meta</label>
                        <select id="robots_meta" name="robots_meta" class="seo-select">
                            <option value="index, follow">Index, Follow</option>
                            <option value="noindex, follow">NoIndex, Follow</option>
                            <option value="index, nofollow">Index, NoFollow</option>
                            <option value="noindex, nofollow">NoIndex, NoFollow</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="site_author">Auteur du Site</label>
                        <input type="text" id="site_author" name="site_author" class="seo-input" 
                               value="<?php echo esc_attr(get_option('site_author', 'Speed Épaviste')); ?>">
                    </div>
                </div>
                
                <div class="checkbox-group">
                    <label>
                        <input type="checkbox" name="enable_og_tags" checked>
                        Activer les Open Graph Tags (Facebook)
                    </label>
                    <label>
                        <input type="checkbox" name="enable_twitter_cards" checked>
                        Activer les Twitter Cards
                    </label>
                    <label>
                        <input type="checkbox" name="enable_json_ld" checked>
                        Activer le Schema Markup JSON-LD
                    </label>
                </div>
            </form>
        </div>
    </div>

    <div id="social-media" class="seo-tab-content">
        <div class="social-form">
            <h3>Configuration Réseaux Sociaux</h3>
            <form id="social-media-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="facebook_url">URL Facebook</label>
                        <input type="url" id="facebook_url" name="facebook_url" class="social-input" 
                               value="<?php echo esc_url(get_option('facebook_url', '')); ?>"
                               placeholder="https://facebook.com/speedepaviste">
                    </div>
                    <div class="form-group">
                        <label for="instagram_url">URL Instagram</label>
                        <input type="url" id="instagram_url" name="instagram_url" class="social-input" 
                               value="<?php echo esc_url(get_option('instagram_url', '')); ?>"
                               placeholder="https://instagram.com/speedepaviste">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="linkedin_url">URL LinkedIn</label>
                        <input type="url" id="linkedin_url" name="linkedin_url" class="social-input" 
                               value="<?php echo esc_url(get_option('linkedin_url', '')); ?>"
                               placeholder="https://linkedin.com/company/speedepaviste">
                    </div>
                    <div class="form-group">
                        <label for="youtube_url">URL YouTube</label>
                        <input type="url" id="youtube_url" name="youtube_url" class="social-input" 
                               value="<?php echo esc_url(get_option('youtube_url', '')); ?>"
                               placeholder="https://youtube.com/speedepaviste">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="og_image">Image Open Graph</label>
                    <input type="url" id="og_image" name="og_image" class="social-input" 
                           value="<?php echo esc_url(get_option('og_image', '')); ?>"
                           placeholder="https://example.com/og-image.jpg">
                    <div class="input-help">Taille recommandée: 1200x630 pixels</div>
                </div>
            </form>
        </div>
    </div>

    <div id="indexing" class="seo-tab-content">
        <div class="seo-section">
            <h3>Indexation Automatique</h3>
            <div class="form-group">
                <button type="button" class="button-primary" onclick="submitToGoogle()">
                    Soumettre à Google
                </button>
                <button type="button" class="button-primary" onclick="generateSitemap()">
                    Générer Sitemap
                </button>
                <button type="button" class="button-primary" onclick="updateRobotsTxt()">
                    Mettre à jour robots.txt
                </button>
            </div>
            
            <div class="checkbox-group">
                <label>
                    <input type="checkbox" name="auto_submit_google" checked>
                    Soumission automatique à Google
                </label>
                <label>
                    <input type="checkbox" name="auto_submit_bing">
                    Soumission automatique à Bing
                </label>
                <label>
                    <input type="checkbox" name="auto_sitemap_generation" checked>
                    Génération automatique du sitemap
                </label>
            </div>
        </div>
    </div>

    <div id="analysis" class="seo-tab-content">
        <div class="seo-section">
            <h3>Analyse SEO en Temps Réel</h3>
            <button type="button" class="button-primary" onclick="analyzeSEO()">
                Analyser le SEO
            </button>
            
            <div id="seo-analysis-results" class="seo-analysis-results" style="display: none;">
                <!-- Results will be populated by JavaScript -->
            </div>
        </div>
    </div>

    <div class="form-submit-section">
        <button type="submit" class="button-primary" onclick="saveAllSEOSettings()">
            Sauvegarder Tous les Paramètres SEO
        </button>
        <button type="button" class="button-secondary" onclick="resetSEOSettings()">
            Réinitialiser
        </button>
    </div>
</div>
