
import { CheckIcon } from "lucide-react";

const FeatureSection = () => {
  return (
    <div className="py-16 px-6 bg-white">
      <div className="max-w-6xl mx-auto">
        <div className="grid grid-cols-1 md:grid-cols-3 gap-10">
          {/* Feature 1 */}
          <div className="flex flex-col items-center text-center">
            <div className="w-14 h-14 rounded-full bg-yellow-300 flex items-center justify-center mb-4">
              <CheckIcon className="h-8 w-8 text-white" />
            </div>
            <h3 className="text-xl font-semibold mb-2">Disponible 7j / 7</h3>
            <p className="text-gray-700">6h / 00h00</p>
          </div>
          
          {/* Feature 2 */}
          <div className="flex flex-col items-center text-center">
            <div className="w-14 h-14 rounded-full bg-yellow-300 flex items-center justify-center mb-4">
              <CheckIcon className="h-8 w-8 text-white" />
            </div>
            <h3 className="text-xl font-semibold mb-2">06 24 93 05 36</h3>
          </div>
          
          {/* Feature 3 */}
          <div className="flex flex-col items-center text-center">
            <div className="w-14 h-14 rounded-full bg-yellow-300 flex items-center justify-center mb-4">
              <CheckIcon className="h-8 w-8 text-white" />
            </div>
            <h3 className="text-xl font-semibold mb-2">Épaviste gratuit</h3>
            <p className="text-gray-700">Île-de-France & aux alentours</p>
          </div>
        </div>
      </div>
    </div>
  );
};

export default FeatureSection;
