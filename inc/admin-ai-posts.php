
<?php
// AI Post Generator admin panel
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="speed-epaviste-admin">
    <div class="dashboard-header">
        <h1>🤖 AI Post Generator - Speed Épaviste Pro</h1>
        <p>Créez du contenu optimisé SEO automatiquement avec l'intelligence artificielle</p>
    </div>

    <div class="ai-generator-container">
        <!-- API Configuration Section -->
        <div class="generator-card api-config-card">
            <h3>🔑 Configuration API</h3>
            <div class="api-providers">
                <div class="provider-selection">
                    <label>
                        <input type="radio" name="ai_provider" value="openai" checked>
                        <div class="provider-card">
                            <div class="provider-icon">🧠</div>
                            <div class="provider-name">OpenAI GPT-4</div>
                            <div class="provider-desc">Le plus puissant pour le contenu créatif</div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" name="ai_provider" value="deepseek">
                        <div class="provider-card">
                            <div class="provider-icon">🚀</div>
                            <div class="provider-name">DeepSeek</div>
                            <div class="provider-desc">Excellent rapport qualité-prix</div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" name="ai_provider" value="copilot">
                        <div class="provider-card">
                            <div class="provider-icon">💼</div>
                            <div class="provider-name">GitHub Copilot</div>
                            <div class="provider-desc">Intégration Microsoft optimisée</div>
                        </div>
                    </label>
                </div>
                
                <div class="api-key-section">
                    <div class="form-group">
                        <label for="openai_api_key">🔐 Clé API OpenAI</label>
                        <div class="api-key-input">
                            <input type="password" id="openai_api_key" placeholder="sk-..." class="theme-input">
                            <button type="button" class="button-secondary" onclick="saveApiKey('openai')">💾 Sauvegarder</button>
                        </div>
                        <div class="input-help">Obtenez votre clé sur <a href="https://platform.openai.com/api-keys" target="_blank">platform.openai.com</a></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="deepseek_api_key">🔐 Clé API DeepSeek</label>
                        <div class="api-key-input">
                            <input type="password" id="deepseek_api_key" placeholder="sk-..." class="theme-input">
                            <button type="button" class="button-secondary" onclick="saveApiKey('deepseek')">💾 Sauvegarder</button>
                        </div>
                        <div class="input-help">Obtenez votre clé sur <a href="https://platform.deepseek.com" target="_blank">platform.deepseek.com</a></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="copilot_api_key">🔐 Clé API GitHub Copilot</label>
                        <div class="api-key-input">
                            <input type="password" id="copilot_api_key" placeholder="ghp_..." class="theme-input">
                            <button type="button" class="button-secondary" onclick="saveApiKey('copilot')">💾 Sauvegarder</button>
                        </div>
                        <div class="input-help">Obtenez votre clé sur <a href="https://github.com/settings/tokens" target="_blank">GitHub Settings</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Generation Section -->
        <div class="generator-card content-generator-card">
            <h3>✍️ Génération de Contenu</h3>
            <form id="ai-post-generator-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="target_keyword">🎯 Mot-clé Principal</label>
                        <input type="text" id="target_keyword" name="keyword" class="theme-input" 
                               placeholder="épaviste, enlèvement épave, etc." required>
                        <div class="input-help">Le mot-clé principal à cibler pour le SEO</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="keyphrase">🔍 Expression Clé</label>
                        <input type="text" id="keyphrase" name="keyphrase" class="theme-input" 
                               placeholder="enlèvement épave gratuit" required>
                        <div class="input-help">Expression longue traîne pour améliorer le SEO</div>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="content_type">📝 Type de Contenu</label>
                        <select id="content_type" name="content_type" class="theme-input">
                            <option value="guide">Guide Complet</option>
                            <option value="article">Article Informatif</option>
                            <option value="listicle">Liste / Top</option>
                            <option value="howto">Tutoriel Comment Faire</option>
                            <option value="comparison">Comparatif</option>
                            <option value="news">Article d'Actualité</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="word_count">📊 Nombre de Mots</label>
                        <select id="word_count" name="word_count" class="theme-input">
                            <option value="500">500 mots (Article court)</option>
                            <option value="1000" selected>1000 mots (Article moyen)</option>
                            <option value="1500">1500 mots (Article long)</option>
                            <option value="2000">2000 mots (Guide complet)</option>
                            <option value="3000">3000 mots (Guide détaillé)</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="additional_instructions">📋 Instructions Supplémentaires</label>
                    <textarea id="additional_instructions" name="instructions" class="theme-input" rows="3"
                              placeholder="Ajoutez des instructions spécifiques (ton, style, points à couvrir, etc.)"></textarea>
                </div>
                
                <div class="generation-controls">
                    <button type="button" class="button-primary" onclick="generateAIPost()" id="generate-btn">
                        🚀 Générer le Contenu
                    </button>
                    <div class="generation-status" id="generation-status"></div>
                </div>
            </form>
        </div>

        <!-- Preview and Edit Section -->
        <div class="generator-card preview-card" id="preview-section" style="display: none;">
            <h3>👁️ Prévisualisation et Édition</h3>
            
            <div class="preview-tabs">
                <button class="preview-tab active" data-tab="editor">✏️ Éditeur</button>
                <button class="preview-tab" data-tab="preview">👀 Aperçu</button>
                <button class="preview-tab" data-tab="seo">📈 Analyse SEO</button>
            </div>
            
            <div id="editor-tab" class="preview-tab-content active">
                <div class="post-editor">
                    <div class="form-group">
                        <label for="post_title">📰 Titre de l'Article</label>
                        <input type="text" id="post_title" class="theme-input post-title-input">
                        <div class="title-metrics">
                            <span class="metric">Longueur: <span id="title-length">0</span> caractères</span>
                            <span class="metric seo-score" id="title-seo-score">Score SEO: 0/100</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="post_content">📝 Contenu de l'Article</label>
                        <div class="content-editor-toolbar">
                            <button type="button" class="editor-btn" onclick="formatText('bold')"><strong>B</strong></button>
                            <button type="button" class="editor-btn" onclick="formatText('italic')"><em>I</em></button>
                            <button type="button" class="editor-btn" onclick="formatText('h2')">H2</button>
                            <button type="button" class="editor-btn" onclick="formatText('h3')">H3</button>
                            <button type="button" class="editor-btn" onclick="formatText('ul')">• Liste</button>
                            <button type="button" class="editor-btn" onclick="formatText('ol')">1. Liste</button>
                            <button type="button" class="editor-btn" onclick="formatText('link')">🔗 Lien</button>
                        </div>
                        <textarea id="post_content" class="theme-input content-editor" rows="20"></textarea>
                        <div class="content-metrics">
                            <span class="metric">Mots: <span id="word-count">0</span></span>
                            <span class="metric">Caractères: <span id="char-count">0</span></span>
                            <span class="metric">Temps de lecture: <span id="read-time">0</span> min</span>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="post_excerpt">📄 Extrait</label>
                            <textarea id="post_excerpt" class="theme-input" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="seo_description">🔍 Meta Description SEO</label>
                            <textarea id="seo_description" class="theme-input" rows="3"></textarea>
                            <div class="desc-metrics">
                                <span class="metric">Longueur: <span id="desc-length">0</span> caractères</span>
                                <span class="metric seo-score" id="desc-seo-score">Score SEO: 0/100</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="seo_keywords">🏷️ Mots-clés SEO</label>
                        <input type="text" id="seo_keywords" class="theme-input">
                        <div class="input-help">Séparez les mots-clés par des virgules</div>
                    </div>
                </div>
            </div>
            
            <div id="preview-tab" class="preview-tab-content">
                <div class="post-preview">
                    <div id="preview-container">
                        <!-- Preview will be populated here -->
                    </div>
                </div>
            </div>
            
            <div id="seo-tab" class="preview-tab-content">
                <div class="seo-analysis">
                    <div class="seo-score-overview">
                        <div class="score-circle">
                            <span class="score-value" id="overall-seo-score">0</span>
                            <span class="score-label">/100</span>
                        </div>
                        <div class="score-status" id="seo-status">En attente d'analyse</div>
                    </div>
                    
                    <div class="seo-checks" id="seo-checks-list">
                        <!-- SEO checks will be populated here -->
                    </div>
                    
                    <div class="seo-recommendations" id="seo-recommendations">
                        <!-- Recommendations will be populated here -->
                    </div>
                    
                    <button type="button" class="button-primary" onclick="analyzeSEO()">
                        🔍 Analyser le SEO
                    </button>
                </div>
            </div>
            
            <div class="post-actions">
                <div class="publish-options">
                    <label>
                        <input type="radio" name="post_status" value="draft" checked>
                        📝 Brouillon
                    </label>
                    <label>
                        <input type="radio" name="post_status" value="publish">
                        🌐 Publier immédiatement
                    </label>
                    <label>
                        <input type="radio" name="post_status" value="pending">
                        ⏳ En attente de relecture
                    </label>
                </div>
                
                <div class="action-buttons">
                    <button type="button" class="button-primary" onclick="saveAIPost()">
                        💾 Sauvegarder l'Article
                    </button>
                    <button type="button" class="button-secondary" onclick="resetGenerator()">
                        🔄 Nouveau Contenu
                    </button>
                    <button type="button" class="button-secondary" onclick="exportPost()">
                        📤 Exporter HTML
                    </button>
                </div>
            </div>
        </div>

        <!-- Post Templates Section -->
        <div class="generator-card templates-card">
            <h3>📋 Modèles de Contenu</h3>
            <div class="template-grid">
                <div class="template-item" onclick="loadTemplate('epaviste-service')">
                    <div class="template-icon">🚗</div>
                    <div class="template-name">Service Épaviste</div>
                    <div class="template-desc">Guide complet des services d'enlèvement</div>
                </div>
                
                <div class="template-item" onclick="loadTemplate('legal-guide')">
                    <div class="template-icon">⚖️</div>
                    <div class="template-name">Guide Légal</div>
                    <div class="template-desc">Réglementation et démarches</div>
                </div>
                
                <div class="template-item" onclick="loadTemplate('eco-friendly')">
                    <div class="template-icon">🌱</div>
                    <div class="template-name">Écologique</div>
                    <div class="template-desc">Recyclage et environnement</div>
                </div>
                
                <div class="template-item" onclick="loadTemplate('howto-guide')">
                    <div class="template-icon">🛠️</div>
                    <div class="template-name">Guide Pratique</div>
                    <div class="template-desc">Instructions étape par étape</div>
                </div>
                
                <div class="template-item" onclick="loadTemplate('faq-article')">
                    <div class="template-icon">❓</div>
                    <div class="template-name">FAQ Article</div>
                    <div class="template-desc">Questions fréquentes</div>
                </div>
                
                <div class="template-item" onclick="loadTemplate('news-update')">
                    <div class="template-icon">📰</div>
                    <div class="template-name">Actualité</div>
                    <div class="template-desc">Article d'actualité du secteur</div>
                </div>
            </div>
        </div>

        <!-- Statistics Section -->
        <div class="generator-card stats-card">
            <h3>📊 Statistiques de Génération</h3>
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number" id="total-generated">0</div>
                    <div class="stat-label">Articles Générés</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" id="total-words">0</div>
                    <div class="stat-label">Mots Créés</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" id="avg-seo-score">0</div>
                    <div class="stat-label">Score SEO Moyen</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" id="published-posts">0</div>
                    <div class="stat-label">Articles Publiés</div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.ai-generator-container {
    display: grid;
    gap: 24px;
    margin-top: 24px;
}

.generator-card {
    background: #fff;
    border-radius: 12px;
    padding: 24px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    border: 1px solid #e5e7eb;
}

.api-config-card .provider-selection {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 16px;
    margin-bottom: 24px;
}

.provider-card {
    border: 2px solid #e5e7eb;
    border-radius: 8px;
    padding: 16px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.provider-card:hover {
    border-color: #3b82f6;
    background: #f8fafc;
}

.provider-selection input[type="radio"]:checked + .provider-card {
    border-color: #3b82f6;
    background: #eff6ff;
}

.provider-icon {
    font-size: 2rem;
    margin-bottom: 8px;
}

.provider-name {
    font-weight: 600;
    margin-bottom: 4px;
}

.provider-desc {
    font-size: 0.875rem;
    color: #6b7280;
}

.api-key-input {
    display: flex;
    gap: 12px;
    align-items: center;
}

.api-key-input input {
    flex: 1;
}

.generation-controls {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-top: 24px;
}

.generation-status {
    font-size: 0.875rem;
    color: #6b7280;
}

.preview-tabs {
    display: flex;
    border-bottom: 2px solid #e5e7eb;
    margin-bottom: 24px;
}

.preview-tab {
    padding: 12px 24px;
    border: none;
    background: none;
    cursor: pointer;
    border-bottom: 2px solid transparent;
    transition: all 0.3s ease;
}

.preview-tab.active {
    border-bottom-color: #3b82f6;
    color: #3b82f6;
    font-weight: 600;
}

.preview-tab-content {
    display: none;
}

.preview-tab-content.active {
    display: block;
}

.content-editor-toolbar {
    display: flex;
    gap: 8px;
    margin-bottom: 12px;
    padding: 8px;
    background: #f8fafc;
    border-radius: 6px;
}

.editor-btn {
    padding: 6px 12px;
    border: 1px solid #d1d5db;
    background: #fff;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.2s ease;
}

.editor-btn:hover {
    background: #f3f4f6;
}

.content-editor {
    min-height: 400px;
    font-family: 'Monaco', 'Menlo', monospace;
    font-size: 14px;
}

.content-metrics, .title-metrics, .desc-metrics {
    display: flex;
    gap: 16px;
    margin-top: 8px;
    font-size: 0.875rem;
    color: #6b7280;
}

.metric.seo-score {
    color: #059669;
    font-weight: 600;
}

.post-preview {
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    padding: 24px;
    background: #fff;
    max-height: 600px;
    overflow-y: auto;
}

.seo-score-overview {
    display: flex;
    align-items: center;
    gap: 24px;
    margin-bottom: 24px;
}

.score-circle {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: conic-gradient(#10b981 0deg, #e5e7eb 0deg);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
}

.score-value {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1f2937;
}

.score-label {
    font-size: 0.75rem;
    color: #6b7280;
}

.seo-checks {
    margin-bottom: 24px;
}

.seo-check-item {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 0;
    border-bottom: 1px solid #f3f4f6;
}

.check-icon {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: bold;
}

.check-icon.good {
    background: #10b981;
    color: white;
}

.check-icon.warning {
    background: #f59e0b;
    color: white;
}

.check-icon.error {
    background: #ef4444;
    color: white;
}

.post-actions {
    margin-top: 24px;
    padding-top: 24px;
    border-top: 1px solid #e5e7eb;
}

.publish-options {
    display: flex;
    gap: 24px;
    margin-bottom: 16px;
}

.publish-options label {
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
}

.action-buttons {
    display: flex;
    gap: 12px;
}

.template-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 16px;
}

.template-item {
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    padding: 16px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.template-item:hover {
    border-color: #3b82f6;
    background: #f8fafc;
}

.template-icon {
    font-size: 2rem;
    margin-bottom: 8px;
}

.template-name {
    font-weight: 600;
    margin-bottom: 4px;
}

.template-desc {
    font-size: 0.875rem;
    color: #6b7280;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 16px;
}

.stat-item {
    text-align: center;
    padding: 16px;
    background: #f8fafc;
    border-radius: 8px;
}

.stat-number {
    font-size: 2rem;
    font-weight: 700;
    color: #1f2937;
    margin-bottom: 4px;
}

.stat-label {
    font-size: 0.875rem;
    color: #6b7280;
}

@media (max-width: 768px) {
    .provider-selection {
        grid-template-columns: 1fr;
    }
    
    .api-key-input {
        flex-direction: column;
        align-items: stretch;
    }
    
    .content-editor-toolbar {
        flex-wrap: wrap;
    }
    
    .action-buttons {
        flex-direction: column;
    }
}
</style>
