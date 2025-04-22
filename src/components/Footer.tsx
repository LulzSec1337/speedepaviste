
import { Facebook, Instagram, Twitter, Linkedin, Phone, Mail, MapPin } from "lucide-react";

const Footer = () => {
  return (
    <footer className="bg-gray-900 text-white">
      <div className="max-w-6xl mx-auto px-6 py-12">
        <div className="grid grid-cols-1 md:grid-cols-4 gap-8">
          {/* Company Info */}
          <div>
            <h3 className="text-xl font-bold mb-4">Speed Épaviste</h3>
            <p className="text-gray-300 mb-4">
              Service d'enlèvement d'épaves agréé VHU en Île-de-France et ses alentours.
            </p>
            <div className="flex space-x-4">
              <a href="#" className="text-gray-300 hover:text-yellow-400">
                <Facebook size={20} />
              </a>
              <a href="#" className="text-gray-300 hover:text-yellow-400">
                <Instagram size={20} />
              </a>
              <a href="#" className="text-gray-300 hover:text-yellow-400">
                <Twitter size={20} />
              </a>
              <a href="#" className="text-gray-300 hover:text-yellow-400">
                <Linkedin size={20} />
              </a>
            </div>
          </div>
          
          {/* Services */}
          <div>
            <h3 className="text-xl font-bold mb-4">Nos Services</h3>
            <ul className="space-y-2">
              <li><a href="#" className="text-gray-300 hover:text-yellow-400">Enlèvement d'épave gratuit</a></li>
              <li><a href="#" className="text-gray-300 hover:text-yellow-400">Destruction de véhicule</a></li>
              <li><a href="#" className="text-gray-300 hover:text-yellow-400">Certificat de destruction</a></li>
              <li><a href="#" className="text-gray-300 hover:text-yellow-400">Rachat d'épave</a></li>
            </ul>
          </div>
          
          {/* Zones */}
          <div>
            <h3 className="text-xl font-bold mb-4">Zones d'intervention</h3>
            <ul className="space-y-2">
              <li><a href="#" className="text-gray-300 hover:text-yellow-400">Paris (75)</a></li>
              <li><a href="#" className="text-gray-300 hover:text-yellow-400">Seine-et-Marne (77)</a></li>
              <li><a href="#" className="text-gray-300 hover:text-yellow-400">Yvelines (78)</a></li>
              <li><a href="#" className="text-gray-300 hover:text-yellow-400">Essonne (91)</a></li>
              <li><a href="#" className="text-gray-300 hover:text-yellow-400">Hauts-de-Seine (92)</a></li>
            </ul>
          </div>
          
          {/* Contact */}
          <div>
            <h3 className="text-xl font-bold mb-4">Contact</h3>
            <ul className="space-y-3">
              <li className="flex items-start">
                <Phone size={18} className="mr-2 mt-1 text-yellow-400" />
                <span>06 24 93 05 36</span>
              </li>
              <li className="flex items-start">
                <Mail size={18} className="mr-2 mt-1 text-yellow-400" />
                <span>contact@speed-epaviste.fr</span>
              </li>
              <li className="flex items-start">
                <MapPin size={18} className="mr-2 mt-1 text-yellow-400" />
                <span>Île-de-France et alentours</span>
              </li>
            </ul>
          </div>
        </div>
        
        <div className="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400 text-sm">
          <p>&copy; {new Date().getFullYear()} Speed Épaviste. Tous droits réservés.</p>
          <div className="mt-2 space-x-4">
            <a href="#" className="hover:text-yellow-400">Mentions légales</a>
            <a href="#" className="hover:text-yellow-400">Politique de confidentialité</a>
            <a href="#" className="hover:text-yellow-400">CGU</a>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
