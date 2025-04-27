
import Header from "@/components/Header";
import HeroSection from "@/components/HeroSection";
import FeatureGrid from "@/components/FeatureGrid";
import ContentSection from "@/components/ContentSection";
import CallToAction from "@/components/CallToAction";
import FAQSection from "@/components/FAQSection";
import ContactForm from "@/components/ContactForm";
import Footer from "@/components/Footer";

const Index = () => {
  return (
    <div className="min-h-screen flex flex-col">
      <Header />
      <main className="flex-grow">
        <HeroSection />
        <FeatureGrid />
        <ContentSection />
        <CallToAction />
        <FAQSection />
        <ContactForm />
      </main>
      <Footer />
    </div>
  );
};

export default Index;
