<?php
/*
Template Name: About Page
*/
get_header();
?>

<div class="about-page">

  <!-- HERO -->
  <section class="about-hero">
    <h1>Our story</h1>
    <p>
      Founded in the heart of Berlin, Midcentury Decor was born from a passion for timeless design and the stories behind each piece. We believe that furniture should be more than just functional; it should be a source of joy and a reflection of personal style.
    </p>
  </section>

  <!-- PHILOSOPHY -->
  <section class="about-philosophy">
    <div class="about-grid">

      <div class="about-image">
        <img src="https://horizons-cdn.hostinger.com/f71e97e2-c216-4773-9235-d0bf6c7a37de/mesut-cicen-tsu1bkzhu98-unsplash-iqZ6i.jpg" alt="Interior design">
      </div>

      <div class="about-text">
        <h2>Our philosophy</h2>
        <p>
          We are dedicated to sourcing and restoring authentic midcentury, vintage, and retro furniture. Each item in our collection is handpicked for its unique character, quality craftsmanship, and enduring appeal.
        </p>
        <p>
          Our mission is to help you create a space that is not only beautiful but also tells a story. We value sustainability, choosing to give well-made pieces a second life, reducing waste, and celebrating the art of design.
        </p>
      </div>

    </div>
  </section>

  <!-- TEAM -->
  <section class="about-team">
    <h2>Meet the team</h2>
    <p class="team-subtitle">The passionate individuals behind our collection.</p>

    <div class="team-grid">

      <div class="team-member">
        <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36" alt="Klaus">
        <h3>Klaus</h3>
        <p class="role">Founder & Curator</p>
        <p class="bio">
          With a lifelong passion for design and history, Klaus founded Midcentury Decor to share his love for timeless furniture.
        </p>
      </div>

      <div class="team-member">
        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956" alt="Greta">
        <h3>Greta</h3>
        <p class="role">Restoration Specialist</p>
        <p class="bio">
          Greta breathes new life into every vintage find with expert restoration techniques.
        </p>
      </div>

      <div class="team-member">
        <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5" alt="Lars">
        <h3>Lars</h3>
        <p class="role">Logistics & Customer Care</p>
        <p class="bio">
          Lars ensures your furniture arrives safely and provides excellent customer support.
        </p>
      </div>

    </div>
  </section>

  <!-- CTA -->
  <section class="about-cta">
    <h2>Join our community</h2>
    <p>
      Ready to find your next treasure? Browse our collection or get in touch if you're looking for something specific.
    </p>

    <div class="cta-buttons">
      <a href="<?php echo site_url('/shop'); ?>" class="btn primary">Shop Now</a>
      <a href="<?php echo site_url('/contact'); ?>" class="btn secondary">Contact Us</a>
    </div>
  </section>

</div>

<?php get_footer(); ?>