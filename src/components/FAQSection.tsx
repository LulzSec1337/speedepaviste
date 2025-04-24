
import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from "@/components/ui/accordion";

const FAQSection = () => {
  const faqs = [
    {
      question: "Comment faire l'enlèvement d'épave gratuitement ?",
      answer: "L'enlèvement d'épave est gratuit avec notre service. Contactez-nous, nous nous occupons de toutes les démarches administratives et du remorquage."
    },
    {
      question: "Quelles zones sont couvertes ?",
      answer: "Nous intervenons dans toute l'Île-de-France et les départements limitrophes (75, 77, 78, 91, 92, 93, 94, 95)."
    },
    {
      question: "Quels documents sont nécessaires ?",
      answer: "Vous aurez besoin de la carte grise du véhicule et d'une pièce d'identité. Nous nous occupons du reste des formalités."
    },
    {
      question: "Combien de temps pour l'intervention ?",
      answer: "Nous intervenons généralement sous 24h à 48h, avec des interventions d'urgence possibles selon disponibilité."
    }
  ];

  return (
    <section className="py-16 px-6 bg-white" id="faq">
      <div className="max-w-4xl mx-auto">
        <h2 className="text-2xl md:text-3xl font-bold text-center mb-8">
          Questions Fréquentes
        </h2>
        <Accordion type="single" collapsible className="w-full space-y-4">
          {faqs.map((faq, index) => (
            <AccordionItem key={index} value={`item-${index}`} className="bg-yellow-50 rounded-lg">
              <AccordionTrigger className="px-4 text-left hover:text-yellow-600">
                {faq.question}
              </AccordionTrigger>
              <AccordionContent className="px-4 pb-4">
                {faq.answer}
              </AccordionContent>
            </AccordionItem>
          ))}
        </Accordion>
      </div>
    </section>
  );
};

export default FAQSection;
