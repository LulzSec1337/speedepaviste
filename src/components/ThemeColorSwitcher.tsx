
import { useState, useEffect } from 'react';
import { DropletIcon, SunIcon, MoonIcon } from 'lucide-react';
import { Button } from '@/components/ui/button';

const themes = [
  { name: 'default', primary: '#FACC15', secondary: '#000000', isDark: false },
  { name: 'blue', primary: '#3B82F6', secondary: '#1E40AF', isDark: false },
  { name: 'green', primary: '#10B981', secondary: '#065F46', isDark: false },
  { name: 'purple', primary: '#8B5CF6', secondary: '#5B21B6', isDark: false },
  { name: 'dark-yellow', primary: '#FACC15', secondary: '#1a1a1a', isDark: true },
  { name: 'dark-blue', primary: '#3B82F6', secondary: '#1a1a1a', isDark: true },
];

const ThemeColorSwitcher = () => {
  const [currentTheme, setCurrentTheme] = useState('default');
  const [isDark, setIsDark] = useState(false);
  const [isOpen, setIsOpen] = useState(false);

  useEffect(() => {
    const savedTheme = localStorage.getItem('site-theme');
    if (savedTheme) {
      const theme = themes.find(t => t.name === savedTheme);
      if (theme) {
        setCurrentTheme(savedTheme);
        setIsDark(theme.isDark);
        applyTheme(theme);
      }
    }
  }, []);

  const applyTheme = (theme: typeof themes[0]) => {
    document.documentElement.style.setProperty('--primary-color', theme.primary);
    document.documentElement.style.setProperty('--secondary-color', theme.secondary);
    
    if (theme.isDark) {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark');
    }
    
    localStorage.setItem('site-theme', theme.name);
  };

  const handleThemeChange = (themeName: string) => {
    const theme = themes.find(t => t.name === themeName);
    if (theme) {
      setCurrentTheme(themeName);
      setIsDark(theme.isDark);
      applyTheme(theme);
    }
    setIsOpen(false);
  };

  const toggleDarkMode = () => {
    const currentThemeObj = themes.find(t => t.name === currentTheme);
    if (!currentThemeObj) return;

    const newThemeName = isDark 
      ? currentTheme.replace('dark-', '')
      : `dark-${currentTheme}`;

    const newTheme = themes.find(t => t.name === newThemeName);
    if (newTheme) {
      handleThemeChange(newTheme.name);
    }
  };

  return (
    <div className="relative flex items-center gap-2">
      <Button
        variant="outline"
        size="icon"
        onClick={() => toggleDarkMode()}
        className="relative"
      >
        {isDark ? <MoonIcon className="h-5 w-5" /> : <SunIcon className="h-5 w-5" />}
      </Button>

      <Button
        variant="outline"
        size="icon"
        onClick={() => setIsOpen(!isOpen)}
        className="relative"
      >
        <DropletIcon className="h-5 w-5" style={{ color: themes.find(t => t.name === currentTheme)?.primary }} />
      </Button>

      {isOpen && (
        <div className="absolute right-0 top-full mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5 z-50">
          <div className="py-1" role="menu">
            {themes.filter(t => t.isDark === isDark).map((theme) => (
              <button
                key={theme.name}
                onClick={() => handleThemeChange(theme.name)}
                className={`flex items-center w-full px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700 ${
                  currentTheme === theme.name ? 'bg-gray-50 dark:bg-gray-700' : ''
                }`}
                role="menuitem"
              >
                <span
                  className="w-4 h-4 rounded-full mr-2"
                  style={{ backgroundColor: theme.primary }}
                />
                {theme.name.split('-')[theme.name.split('-').length - 1].charAt(0).toUpperCase() + 
                 theme.name.split('-')[theme.name.split('-').length - 1].slice(1)}
              </button>
            ))}
          </div>
        </div>
      )}
    </div>
  );
};

export default ThemeColorSwitcher;
