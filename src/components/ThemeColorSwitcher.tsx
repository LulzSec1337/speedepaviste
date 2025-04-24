
import { useState, useEffect } from 'react';
import { DropletIcon } from 'lucide-react';
import { Button } from '@/components/ui/button';

const themes = [
  { name: 'default', primary: '#FACC15', secondary: '#000000' },
  { name: 'blue', primary: '#3B82F6', secondary: '#1E40AF' },
  { name: 'green', primary: '#10B981', secondary: '#065F46' },
  { name: 'purple', primary: '#8B5CF6', secondary: '#5B21B6' },
];

const ThemeColorSwitcher = () => {
  const [currentTheme, setCurrentTheme] = useState('default');
  const [isOpen, setIsOpen] = useState(false);

  useEffect(() => {
    const savedTheme = localStorage.getItem('site-theme');
    if (savedTheme) {
      setCurrentTheme(savedTheme);
      applyTheme(savedTheme);
    }
  }, []);

  const applyTheme = (themeName: string) => {
    const theme = themes.find(t => t.name === themeName);
    if (!theme) return;

    document.documentElement.style.setProperty('--primary-color', theme.primary);
    document.documentElement.style.setProperty('--secondary-color', theme.secondary);
    localStorage.setItem('site-theme', themeName);
  };

  const handleThemeChange = (themeName: string) => {
    setCurrentTheme(themeName);
    applyTheme(themeName);
    setIsOpen(false);
  };

  return (
    <div className="relative">
      <Button
        variant="outline"
        size="icon"
        onClick={() => setIsOpen(!isOpen)}
        className="relative"
      >
        <DropletIcon className="h-5 w-5" />
      </Button>

      {isOpen && (
        <div className="absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50">
          <div className="py-1" role="menu">
            {themes.map((theme) => (
              <button
                key={theme.name}
                onClick={() => handleThemeChange(theme.name)}
                className={`flex items-center w-full px-4 py-2 text-sm hover:bg-gray-100 ${
                  currentTheme === theme.name ? 'bg-gray-50' : ''
                }`}
                role="menuitem"
              >
                <span
                  className="w-4 h-4 rounded-full mr-2"
                  style={{ backgroundColor: theme.primary }}
                />
                {theme.name.charAt(0).toUpperCase() + theme.name.slice(1)}
              </button>
            ))}
          </div>
        </div>
      )}
    </div>
  );
};

export default ThemeColorSwitcher;
