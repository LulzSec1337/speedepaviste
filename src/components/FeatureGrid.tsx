
import { 
  CalendarCheck, 
  Phone, 
  Bolt,
  Badge,
  Leaf,
  Car,
  MapPin,
  ThumbsUp
} from "lucide-react";

const features = [
  {
    icon: CalendarCheck,
    title: "Disponible 7j/7",
    description: "6h / 00h00",
    animation: "animate-pulse"
  },
  {
    icon: Phone,
    title: "06 24 93 05 36",
    description: "Ligne directe",
    link: "tel:0624930536"
  },
  {
    icon: Bolt,
    title: "Intervention rapide",
    description: "30min à Paris",
    animation: "animate-bounce"
  },
  {
    icon: Badge,
    title: "Agréé VHU",
    description: "Certificat de destruction",
    animation: "animate-spin"
  },
  {
    icon: Leaf,
    title: "Respect de l'environnement",
    description: "Traitement écologique",
    animation: "animate-spin"
  },
  {
    icon: Car,
    title: "Tous véhicules",
    description: "Auto, utilitaire, 2 roues…",
    animation: "animate-pulse"
  },
  {
    icon: MapPin,
    title: "Île-de-France",
    description: "+ départements limitrophes",
    animation: "animate-bounce"
  },
  {
    icon: ThumbsUp,
    title: "Satisfaction client",
    description: "2000+ avis positifs",
    animation: "animate-fade-in"
  }
];

const FeatureGrid = () => {
  return (
    <section className="py-16 px-6 bg-white animate-fade-in" id="agrements">
      <div className="max-w-6xl mx-auto">
        <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
          {features.map((feature, index) => (
            <div key={index} className="flex flex-col items-center text-center p-4 rounded-xl shadow bg-yellow-50">
              <div className={`w-14 h-14 rounded-full bg-yellow-300 flex items-center justify-center mb-4 ${feature.animation || ''}`}>
                {feature.icon && <feature.icon className="text-white w-8 h-8" />}
              </div>
              <h3 className="text-xl font-semibold mb-2">
                {feature.link ? (
                  <a href={feature.link} aria-label={`${feature.title} - cliquez pour appeler`}>
                    {feature.title}
                  </a>
                ) : (
                  feature.title
                )}
              </h3>
              <p className="text-gray-700">{feature.description}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default FeatureGrid;
