
import { Button } from "@/components/ui/button";

const CallToAction = () => {
  return (
    <div className="bg-gradient-to-b from-yellow-300 to-yellow-400 py-16 px-6 text-center">
      <div className="max-w-4xl mx-auto">
        <h2 className="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
          Si votre voiture est hors d'usage ou des réparations coûteuses sont nécessaires hors de votre budget ?
        </h2>
        
        <p className="text-xl font-semibold text-gray-900 mb-8">
          Une solution est à portée de main !
        </p>
        
        <p className="text-sm text-gray-800 mb-8">
          Contactez simplement nos spécialistes et découvrez nos solutions avantageuses. Organisons gratuitement l'enlèvement de l'épave par un de nos épavistes agréés.
        </p>
        
        <Button className="bg-black hover:bg-gray-800 text-white px-8 py-3 rounded-full font-medium">
          Je contacte un spécialiste
        </Button>
      </div>
    </div>
  );
};

export default CallToAction;
