
const ContentSection = () => {
  return (
    <section className="py-16 px-6 bg-white" id="content">
      <div className="max-w-6xl mx-auto">
        <div className="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
          <div>
            <h2 className="text-2xl md:text-3xl font-bold mb-6">
              Speed épaviste ? Agir pour l'écologie.
            </h2>
            <p className="text-gray-700 mb-4">
              Un épaviste enlève un véhicule hors d'usage. Speed épaviste intervient partout en Île-de-France et alentours : 91, 93, 92, 94, 77, 78, 02, 27, 28, 45, 60. Nos pros sont agréés et titulaires d'un certificat de conformité pour votre tranquillité.
            </p>
          </div>
          <div className="flex justify-center">
            <img
              src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
              alt="Clé de voiture sur fond jaune"
              className="rounded-lg shadow-lg max-w-full h-auto"
              width="400"
              height="270"
              loading="lazy"
            />
          </div>
        </div>
      </div>
    </section>
  );
};

export default ContentSection;
