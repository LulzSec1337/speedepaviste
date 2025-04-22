
const ContentSection = () => {
  return (
    <div className="py-16 px-6 bg-white">
      <div className="max-w-6xl mx-auto">
        <div className="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
          <div>
            <h2 className="text-2xl md:text-3xl font-bold mb-6">
              Speed épaviste ? C'est agir pour l'écologie demandée.
            </h2>
            
            <p className="text-gray-700 mb-4">
              Un épaviste est chargé d'intervenir & d'enlever un véhicule hors d'usage. Les automobiles n'étant plus en état de circuler, les épaves de tous types peuvent ou non, être éliminées gratuitement prennent en charge l'enlèvement de l'épave.
            </p>
            
            <p className="text-gray-700 mb-4">
              Speed épaviste dispose de plusieurs professionnels dans l'enlèvement d'épave dans tout l'Île-de-France & aux alentours : 91, 93, 92, 94, 77, 78, 02, 27, 28, 45, 60 entre 10. Pour certifier l'enlèvement d'épave, il est impératif pour un épaviste d'obtenir une agrégation.
            </p>
            
            <p className="text-gray-700">
              Chaque épaviste affilié à Speed épaviste est titulaire d'un certificat de conformité spécifique aux épaves.
            </p>
          </div>
          
          <div className="flex justify-center">
            <img
              src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
              alt="Car key"
              className="rounded-lg shadow-lg max-w-full h-auto"
            />
          </div>
        </div>
      </div>
    </div>
  );
};

export default ContentSection;
