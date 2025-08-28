<?php
// index.php
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Rehan.Education — Digital Mastery for a Connected World</title>
<style>
  :root{--accent:#276EF1;--accent-2:#6C82FF;--muted:#6b7280;--card:#fff;--bg:#F6F8FF}
  *{box-sizing:border-box}
  body{margin:0;font-family:Inter,system-ui,Arial;background:linear-gradient(180deg,var(--bg),#eef3ff 60%);color:#0f172a}
  header{display:flex;align-items:center;justify-content:space-between;padding:18px 28px}
  .brand{display:flex;gap:12px;align-items:center}
  .logo{width:56px;height:56px;border-radius:12px;background:linear-gradient(135deg,var(--accent),var(--accent-2));display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:20px}
  nav{display:flex;gap:10px}
  .nav-btn{background:transparent;border:0;padding:8px 12px;border-radius:8px;font-weight:600;cursor:pointer;color:var(--muted)}
  .hero{max-width:1100px;margin:36px auto;padding:24px;display:grid;grid-template-columns:1fr 420px;gap:28px;align-items:center;background:linear-gradient(180deg, rgba(255,255,255,0.8), rgba(255,255,255,0.6));padding:28px;border-radius:18px}
  .tag{display:inline-block;padding:6px 10px;background:rgba(108,130,255,0.12);color:var(--accent);border-radius:999px;font-weight:700;margin-bottom:12px}
  h1{margin:6px 0 12px;font-size:28px}
  p.lead{color:var(--muted);line-height:1.55}
  .cta{display:flex;gap:12px;margin-top:18px}
  .btn-primary{background:linear-gradient(90deg,var(--accent),var(--accent-2));color:#fff;padding:12px 16px;border-radius:10px;border:0;font-weight:700;cursor:pointer}
  .card{background:var(--card);padding:18px;border-radius:14px;box-shadow:0 10px 30px rgba(15,23,42,0.06)}
  .features{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:20px}
  .feat{padding:14px;border-radius:12px;background:linear-gradient(180deg, rgba(39,110,241,0.04), rgba(108,130,255,0.02));font-weight:600}
  footer{max-width:1100px;margin:26px auto;padding:18px;color:var(--muted);display:flex;justify-content:space-between;align-items:center}
  @media (max-width:900px){.hero{grid-template-columns:1fr}.features{grid-template-columns:1fr}}
</style>
</head>
<body>
<header>
  <div class="brand">
    <div class="logo">RE</div>
    <div>
      <div style="font-weight:800">Rehan.Education</div>
      <div style="font-size:12px;color:var(--muted)">Digital Mastery for a Connected World</div>
    </div>
  </div>
  <nav>
    <button class="nav-btn" onclick="navigate('index.php')">Home</button>
    <button class="nav-btn" onclick="navigate('curriculum.php')">Curriculum</button>
    <button class="nav-btn" onclick="navigate('courses.php')">Courses</button>
    <button class="nav-btn" onclick="navigate('facilitators.php')">Facilitators</button>
    <button class="nav-btn" onclick="navigate('founder.php')">Founder's Message</button>
    <button class="nav-btn" onclick="navigate('contact.php')">Contact</button>
  </nav>
</header>
 
<main>
  <section class="hero">
    <div>
      <span class="tag">For Teens • AI-enabled</span>
      <h1>Digital Mastery for a Connected World</h1>
      <p class="lead">Learn AI tools, digital skills, and online teaching methods to create impact and financial independence — join a program designed to empower students to positively impact 10 million lives.</p>
      <div class="cta">
        <button class="btn-primary" onclick="navigate('courses.php')">Explore Courses</button>
        <button class="btn-primary" style="background:transparent;border:2px solid rgba(39,110,241,0.12);color:var(--muted)" onclick="navigate('contact.php')">Get In Touch</button>
      </div>
      <div class="features">
        <div class="feat">AI-Enabled Education</div>
        <div class="feat">Digital Skills & Monetization</div>
        <div class="feat">Online Teaching Mastery</div>
      </div>
    </div>
 
    <div class="card">
      <h3 style="margin-top:0">Why Rehan.Education?</h3>
      <p style="color:var(--muted)">A practical curriculum focused on real-world digital skills, AI integration, and guided mentorship to help you convert learning into income and impact.</p>
      <ul style="color:var(--muted);padding-left:18px">
        <li>Hands-on projects & portfolios</li>
        <li>Mentorship & community</li>
        <li>Placement & freelance guidance</li>
      </ul>
      <div style="margin-top:12px">
        <strong>Contact</strong>
        <div style="font-size:13px;color:var(--muted)">Call/WhatsApp: +44 7418 359852</div>
        <div style="margin-top:8px"><button class="btn-primary" onclick="navigate('contact.php')">Apply Now</button></div>
      </div>
    </div>
  </section>
</main>
 
<footer>
  <div>© Rehan.Education — Built as a clone</div>
  <div style="color:var(--muted)"><a href="#" onclick="openSocial('https://facebook.com')">Facebook</a> • <a href="#" onclick="openSocial('https://instagram.com')">Instagram</a> • <a href="#" onclick="openSocial('https://twitter.com')">X</a></div>
</footer>
 
<script>
function navigate(path){ window.location.href = path; }
function openSocial(url){ window.open(url, '_blank'); }
</script>
</body>
</html>
 
