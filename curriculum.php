<?php
// curriculum.php
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Curriculum — Rehan.Education</title>
<style>
  body{font-family:Inter,system-ui,Arial;margin:0;background:#f7f9ff;color:#071033}
  .wrap{max-width:1000px;margin:28px auto;padding:20px}
  header{display:flex;align-items:center;justify-content:space-between;padding-bottom:12px}
  .logo .box{width:44px;height:44px;border-radius:10px;background:linear-gradient(135deg,#276EF1,#6C82FF);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:800}
  nav{display:flex;gap:10px}
  button.nav{background:transparent;border:0;padding:8px 10px;border-radius:8px;cursor:pointer;color:#5b6270}
  .hero{background:#fff;padding:20px;border-radius:12px;box-shadow:0 6px 20px rgba(8,15,40,0.05)}
  .grid{display:grid;grid-template-columns:1fr 320px;gap:14px;margin-top:14px}
  .module{background:linear-gradient(180deg,#fff,#fbfdff);padding:16px;border-radius:10px;box-shadow:0 6px 18px rgba(8,15,40,0.04)}
  @media (max-width:900px){.grid{grid-template-columns:1fr}}
</style>
</head>
<body>
<div class="wrap">
  <header>
    <div style="display:flex;gap:12px;align-items:center">
      <div class="box" style="width:44px;height:44px;border-radius:10px;background:linear-gradient(135deg,#276EF1,#6C82FF);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:800">RE</div>
      <div>
        <div style="font-weight:800">Rehan.Education</div>
        <div style="font-size:12px;color:#6b7280">Curriculum overview</div>
      </div>
    </div>
    <nav>
      <button class="nav" onclick="navigate('index.php')">Home</button>
      <button class="nav" onclick="navigate('courses.php')">Courses</button>
      <button class="nav" onclick="navigate('facilitators.php')">Facilitators</button>
      <button class="nav" onclick="navigate('contact.php')">Contact</button>
    </nav>
  </header>
 
  <section class="hero">
    <h1>Curriculum — AI + Digital Skills + Teaching</h1>
    <p style="color:#59606b">A practical curriculum for teens: learn AI tools, build digital products, and master online teaching methods.</p>
 
    <div class="grid">
      <div>
        <div class="module">
          <h3>Core Modules</h3>
          <ul style="color:#59606b;padding-left:16px">
            <li>Intro to AI & Prompting — practical tools & ethics</li>
            <li>Digital Design & Content Creation — portfolio projects</li>
            <li>Freelancing & Monetization — marketplaces, pitching</li>
            <li>Online Teaching & Course Creation — curriculum design</li>
            <li>Capstone Project — launch a micro-course or digital product</li>
          </ul>
        </div>
 
        <div style="height:14px"></div>
 
        <div class="module">
          <h3>Learning Path</h3>
          <p style="color:#59606b">Each student builds a portfolio, receives mentorship, and completes a marketplace-ready project by program end.</p>
        </div>
      </div>
 
      <aside>
        <div class="module">
          <h4>Outcomes</h4>
          <ul style="color:#59606b;padding-left:16px">
            <li>Real portfolio + case studies</li>
            <li>Income-ready skills</li>
            <li>Micro-course creation ability</li>
          </ul>
        </div>
 
        <div style="height:12px"></div>
 
        <div class="module">
          <h4>Tools Covered</h4>
          <p style="color:#59606b">Popular AI assistants, design tools, and course platforms — practical, hands-on training.</p>
        </div>
      </aside>
 
    </div>
  </section>
</div>
 
<script>function navigate(path){window.location.href=path;}</script>
</body>
</html>
