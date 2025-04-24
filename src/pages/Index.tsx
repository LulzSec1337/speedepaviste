
import Header from "@/components/Header";
import HeroSection from "@/components/HeroSection";
import FeatureSection from "@/components/FeatureSection";
import ContentSection from "@/components/ContentSection";
import FAQSection from "@/components/FAQSection";
import ContactForm from "@/components/ContactForm";
import Footer from "@/components/Footer";

const Index = () => {
  return (
    <div className="min-h-screen flex flex-col bg-gradient-to-b from-white via-yellow-50 to-yellow-100">
      <Header />
      <main className="flex-grow">
        <HeroSection />
        <FeatureSection />
        <ContentSection />
        <FAQSection />
        <ContactForm />
      </main>
      <Footer />
    </div>
  );
};

export default Index;
