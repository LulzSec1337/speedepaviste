
import { useState } from "react";
import { ChevronDown } from "lucide-react";
import { Button } from "@/components/ui/button";

const Header = () => {
  const [isDropdownOpen, setIsDropdownOpen] = useState(false);

  return (
    <header className="bg-white py-4 px-6 flex justify-between items-center">
      <div className="flex items-center">
        <img 
          src="/lovable-uploads/3d519578-89af-4e85-ae7d-cc17e119afb7.png" 
          alt="Speed Épaviste Logo" 
          className="h-12 object-contain"
        />
      </div>
      
      <nav className="hidden md:flex items-center space-x-6 text-gray-800">
        <a href="#" className="hover:text-gray-600">Enlèvement d'épave</a>
        <a href="#" className="hover:text-gray-600">Zone intervention</a>
        <div className="relative">
          <button 
            className="flex items-center hover:text-gray-600"
            onClick={() => setIsDropdownOpen(!isDropdownOpen)}
          >
            Épaviste <ChevronDown className="ml-1 h-4 w-4" />
          </button>
          {isDropdownOpen && (
            <div className="absolute top-full left-0 mt-2 bg-white shadow-md rounded py-2 w-48 z-10">
              <a href="#" className="block px-4 py-2 hover:bg-gray-100">Service 1</a>
              <a href="#" className="block px-4 py-2 hover:bg-gray-100">Service 2</a>
              <a href="#" className="block px-4 py-2 hover:bg-gray-100">Service 3</a>
            </div>
          )}
        </div>
      </nav>
      
      <Button className="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-2 rounded-full">
        <span className="mr-2">📞</span> 06 24 93 05 36
      </Button>
    </header>
  );
};

export default Header;
