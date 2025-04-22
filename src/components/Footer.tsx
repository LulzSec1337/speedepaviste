
import { 
  Facebook, Instagram, Twitter, Linkedin, Phone, Mail, MapPin, 
  Users, Award, Star, Heart, Globe
} from "lucide-react";
import { useState } from "react";

const testimonials = [
  {
    name: "Jean M.",
    feedback: "Super service, rapide et efficace ! Je recommande à 100 %.",
    icon: <Star size={18} className="text-yellow-400" />
  },
  {
    name: "Fatou D.",
    feedback: "L’enlèvement de mon véhicule était gratuit, équipe très sympathique.",
    icon: <Heart size={18} className="text-red-400" />
  },
  {
    name: "Paul R.",
    feedback: "Clarté, réactivité, sérieux – parfait pour mon épave.",
    icon: <Award size={18} className="text-amber-500" />
  },
];

const Footer = () => {
  const [email, setEmail] = useState("");
  const [success, setSuccess] = useState(false);

  // Simple newsletter signup handler (simulate success)
  function handleSubmit(e: React.FormEvent) {
    e.preventDefault();
    setSuccess(true);
    setTimeout(() => setSuccess(false), 4000);
    setEmail("");
  }

  return (
    <footer className="relative bg-gradient-to-br from-gray-900 via-gray-800 to-yellow-500 text-white overflow-hidden">
      {/* Animated Blobs (visual cool factor) */}
      <div className="absolute top-0 left-0 w-36 h-36 bg-yellow-400 opacity-20 rounded-full blur-3xl animate-pulse"></div>
      <div className="absolute bottom-0 right-0 w-36 h-36 bg-yellow-300 opacity-15 rounded-full blur-3xl animate-pulse delay-2000"></div>
      <div className="max-w-6xl relative z-10 mx-auto px-6 py-14">
        <div className="grid grid-cols-1 md:grid-cols-5 gap-8">
          {/* Company Info */}
          <div className="col-span-2 flex flex-col justify-between">
            <div>
              <h3 className="text-2xl font-bold mb-3 flex items-center gap-2">
                <Globe className="text-yellow-400 animate-spin-slow" size={28} /> Speed Épaviste
              </h3>
              <p className="text-gray-300 mb-4">Service d'enlèvement d'épaves gratuit et agréé VHU en Île-de-France.</p>
              <div className="flex gap-3 mt-3">
                <a href="#" className="hover:scale-110 transition-transform hover:text-yellow-400"><Facebook size={22}/></a>
                <a href="#" className="hover:scale-110 transition-transform hover:text-yellow-400"><Instagram size={22}/></a>
                <a href="#" className="hover:scale-110 transition-transform hover:text-yellow-400"><Twitter size={22}/></a>
                <a href="#" className="hover:scale-110 transition-transform hover:text-yellow-400"><Linkedin size={22}/></a>
              </div>
            </div>
            <div className="mt-10 flex items-center gap-1 text-sm text-gray-400">
              <Users className="mr-1 text-yellow-500" size={16}/> Plus de <span className="mx-1 font-semibold text-white">2000</span> clients satisfaits
            </div>
          </div>
          
          {/* Services */}
          <div>
            <h3 className="text-lg font-bold mb-3 flex items-center gap-1">
              <Award className="text-yellow-400" size={18}/> Nos Services
            </h3>
            <ul className="space-y-2 text-gray-200">
              <li><a href="#" className="hover:text-yellow-400 flex items-center gap-1"><Star size={16} className="text-yellow-400"/> Enlèvement d'épave gratuit</a></li>
              <li><a href="#" className="hover:text-yellow-400 flex items-center gap-1"><ShieldCheck size={16} className="text-blue-400"/> Destruction de véhicule</a></li>
              <li><a href="#" className="hover:text-yellow-400 flex items-center gap-1"><Award size={16} className="text-yellow-400"/> Certificat de destruction</a></li>
              <li><a href="#" className="hover:text-yellow-400 flex items-center gap-1"><Heart size={16} className="text-red-400"/> Rachat d'épave</a></li>
            </ul>
          </div>

          {/* Zones */}
          <div>
            <h3 className="text-lg font-bold mb-3 flex items-center gap-1">
              <MapPin className="text-yellow-400" size={18}/> Zones
            </h3>
            <ul className="space-y-2 text-gray-200">
              <li><a href="#" className="hover:text-yellow-400">Paris (75)</a></li>
              <li><a href="#" className="hover:text-yellow-400">Seine-et-Marne (77)</a></li>
              <li><a href="#" className="hover:text-yellow-400">Yvelines (78)</a></li>
              <li><a href="#" className="hover:text-yellow-400">Essonne (91)</a></li>
              <li><a href="#" className="hover:text-yellow-400">Hauts-de-Seine (92)</a></li>
              <li><a href="#" className="hover:text-yellow-400">+ Et autour (92, 93...)</a></li>
            </ul>
          </div>
          
          {/* Newsletter & Contact */}
          <div className="flex flex-col justify-between">
            <div>
              <h3 className="text-lg font-bold mb-3 flex items-center gap-1">
                <Mail className="text-yellow-400" size={18}/> Newsletter
              </h3>
              <form onSubmit={handleSubmit} className="mb-3">
                <div className="flex rounded-full overflow-hidden border border-yellow-500">
                  <input 
                    type="email" 
                    required 
                    placeholder="Votre email" 
                    value={email}
                    onChange={e => setEmail(e.target.value)}
                    className="bg-gray-900 text-gray-100 px-4 py-2 outline-none flex-grow"
                  />
                  <button 
                    type="submit"
                    className="bg-yellow-400 text-black px-4 py-2 hover:bg-yellow-300 transition-colors font-semibold"
                  >
                    S'inscrire
                  </button>
                </div>
                {success && (
                  <p className="text-sm text-green-400 mt-2 animate-fade-in">
                    Merci pour votre inscription !
                  </p>
                )}
              </form>

              <h3 className="text-lg font-bold mb-2 flex items-center gap-1">
                <Phone size={18} className="text-yellow-400"/> Contact
              </h3>
              <ul className="space-y-2">
                <li className="flex items-center gap-2"><Phone size={16} className="text-yellow-400"/> 06 24 93 05 36</li>
                <li className="flex items-center gap-2"><Mail size={16} className="text-yellow-400"/> contact@speed-epaviste.fr</li>
                <li className="flex items-center gap-2"><MapPin size={16} className="text-yellow-400"/> Île-de-France & alentours</li>
              </ul>
            </div>
          </div>
        </div>
          
        {/* Cool Testimonials */}
        <div className="mt-12 pb-4">
          <h4 className="text-center text-xl font-bold mb-6 flex items-center justify-center gap-2">
            <Star className="text-yellow-400 animate-pulse" /> Avis clients
          </h4>
          <div className="flex flex-wrap gap-6 justify-center">
            {testimonials.map((t, i) => (
              <div 
                key={i}
                className="bg-gray-800 bg-opacity-70 text-white px-6 py-4 rounded-xl shadow-lg max-w-[330px] flex-1 min-w-[250px] flex flex-col items-start animate-fade-in"
              >
                <div className="flex items-center gap-2 mb-2">
                  {t.icon}
                  <span className="text-sm font-bold">{t.name}</span>
                </div>
                <p className="text-sm text-gray-200 italic">{t.feedback}</p>
              </div>
            ))}
          </div>
        </div>
          
        {/* Footer Bottom */}
        <div className="border-t border-gray-700 mt-10 pt-6 flex flex-col md:flex-row items-center justify-between text-gray-300 text-xs">
          <div className="flex items-center gap-1 mb-3 md:mb-0">
            <span>&copy; {new Date().getFullYear()} Speed Épaviste.</span>
            <span>Tous droits réservés.</span>
          </div>
          <div className="flex gap-4">
            <a href="#" className="hover:text-yellow-400 underline underline-offset-2 transition-colors">Mentions légales</a>
            <a href="#" className="hover:text-yellow-400 underline underline-offset-2 transition-colors">Politique de confidentialité</a>
            <a href="#" className="hover:text-yellow-400 underline underline-offset-2 transition-colors">CGU</a>
          </div>
        </div>
      </div>
      {/* Subtle animated glow bottom right */}
      <div className="absolute -bottom-10 right-3 w-52 h-20 bg-yellow-300 opacity-20 rounded-full blur-3xl animate-pulse"></div>
      <style>
        {`
          @keyframes spin-slow { 
            0% { transform: rotate(0deg);}
            100% { transform: rotate(360deg);}
          }
          .animate-spin-slow {
            animation: spin-slow 6s linear infinite;
          }
          .animate-fade-in {
            animation: fade-in 0.5s cubic-bezier(0.4,0,0.2,1);
          }
        `}
      </style>
    </footer>
  );
};

// Utility icon for shield-check not in the allowed list: fallback to Award
function ShieldCheck(props: any) {
  return <Award {...props} />;
}

export default Footer;
