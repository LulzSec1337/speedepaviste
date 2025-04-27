
import { Button } from "@/components/ui/button";

const HeroSection = () => {
  return (
    <section className="relative overflow-hidden" aria-label="Enlèvement épave gratuit en Île-de-France">
      <div className="bg-gradient-to-b from-white via-yellow-100 to-yellow-400 pt-16 pb-32 px-6 md:px-12 lg:px-24">
        <div className="max-w-4xl mx-auto">
          <h1 className="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
            Votre enlèvement d'épave gratuit par un épaviste agréé VHU, c'est ici.
          </h1>
          <p className="text-sm md:text-base text-gray-700 mb-8 max-w-2xl">
            SPEED ÉPAVISTE vous accompagne dans l'enlèvement de votre épave à domicile 7j/7. Service 100% GRATUIT, remorquage d'épave et certificat de cession du véhicule offert.
          </p>
          <Button 
            asChild
            className="bg-black hover:bg-gray-800 text-white px-8 py-3 rounded-full font-medium animate-fade-in"
          >
            <a href="#contact">Enlèvement Épave</a>
          </Button>
        </div>
      </div>
      <div className="absolute bottom-0 left-0 right-0" aria-hidden="true">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" className="w-full">
          <path d="M0 120H1440V0C1320 40 1080 80 720 80C360 80 120 40 0 0V120Z" fill="white" />
        </svg>
      </div>
    </section>
  );
};

export default HeroSection;
