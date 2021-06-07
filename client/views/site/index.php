<?php

/* @var $this yii\web\View */

$this->title = 'Home';
?>
<!-- Hero Start -->
<div class="hero">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-6">
            <h2>Sistem Infromasi</h2>
            <h2><span>Kerja Praktek</span> PENS</h2>
            <p>SIKAP PENS merupakan portal berita mengenai Keja Praktek khusus bagi mahasiswa pens</p>
            <a class="btn" href="https://htmlcodex.com/bootstrap-agency-template">Download Now</a>
         </div>
         <div class="col-md-6">
            <img src="img/hero.png" alt="Image">
         </div>
      </div>
   </div>
</div>
<!-- Hero End -->


<!-- About Start -->
<div class="about">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-6">
            <div id="video-section">
               <div class="youtube-player" data-id="jssO8-5qmag"></div>

               <script>
                  document.addEventListener("DOMContentLoaded",
                     function() {
                        var div, n,
                           v = document.getElementsByClassName("youtube-player");
                        for (n = 0; n < v.length; n++) {
                           div = document.createElement("div");
                           div.setAttribute("data-id", v[n].dataset.id);
                           div.innerHTML = labnolThumb(v[n].dataset.id);
                           div.onclick = labnolIframe;
                           v[n].appendChild(div);
                        }
                     });

                  function labnolThumb(id) {
                     var thumb = '<img src="img/poster.jpg">',
                        play = '<div class="play"></div>';
                     return thumb.replace("ID", id) + play;
                  }

                  function labnolIframe() {
                     var iframe = document.createElement("iframe");
                     var embed = "https://www.youtube.com/embed/ID?autoplay=1";
                     iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
                     iframe.setAttribute("frameborder", "0");
                     iframe.setAttribute("allowfullscreen", "1");
                     this.parentNode.replaceChild(iframe, this);
                  }
               </script>
            </div>
         </div>
         <div class="col-md-6">
            <h2 class="section-title">Learn About Us</h2>
            <p>
               Kerja Praktek (KP) merupakan salah satu mata kuliah yang wajib ditempuh oleh setiap mahasiswa PENS. Kegiatan KP dilaksanakan dengan tujuan untuk memberikan wawasan dan pengalaman kerja kepada mahasiswa secara langsung di dunia industri sehingga mahasiswa mendapat kesempatan untuk melihat relevansi keilmuan yang dipelajari serta dapat mengimplementasikan keilmuan/pengetahuan yang dimilki pada permasalahan di dunia kerja
            </p>
            <p>
               Berdasarkan kebutuhan dan tuntutan perusahaan dan hasil evalusi diri serta analisa SWOT, PENS memilki kebijakan untuk pelaksanaan KP yang semula ditempuh dalam 1 (satu) bulan diubah pelaksanaannya menjadi 3 (tiga bulan). Perubahan masa tempuh KP ini tentu saja berdampak pada perubahan beberapa prosedur pelaksanaan KP yang ada pada pedoman sebelumnya. Pelaksanaan KP selama tiga bulan juga memerlukan alat monitoring handal yang dapat membantu memantau pelaksanaan proses KP mahasiswa-mahasiswa PENS yang pelaksanaanya berada di luar PENS
            </p>
            <a class="btn" href="">Learn More</a>
         </div>
      </div>
   </div>
</div>
<!-- About End -->


<!-- Service Start -->
<!-- <div class="service">
      <div class="container-fluid">
         <div class="section-header">
            <h2>Our Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium ornare velit non</p>
         </div>
         <div class="row">
            <div class="col-lg-3 col-md-6">
               <div class="service-item">
                  <h3>Web Design</h3>
                  <img src="img/icon-service-1.png" alt="Service">
                  <p>Lorem ipsum dolor sit amet elit pretium ornare</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="service-item">
                  <h3>Development</h3>
                  <img src="img/icon-service-2.png" alt="Service">
                  <p>Lorem ipsum dolor sit amet elit pretium ornare</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="service-item">
                  <h3>UI Design</h3>
                  <img src="img/icon-service-3.png" alt="Service">
                  <p>Lorem ipsum dolor sit amet elit pretium ornare</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="service-item">
                  <h3>Programming</h3>
                  <img src="img/icon-service-4.png" alt="Service">
                  <p>Lorem ipsum dolor sit amet elit pretium ornare</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="service-item">
                  <h3>Graphic Design</h3>
                  <img src="img/icon-service-5.png" alt="Service">
                  <p>Lorem ipsum dolor sit amet elit pretium ornare</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="service-item">
                  <h3>Video Editing</h3>
                  <img src="img/icon-service-6.png" alt="Service">
                  <p>Lorem ipsum dolor sit amet elit pretium ornare</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="service-item">
                  <h3>SEO</h3>
                  <img src="img/icon-service-7.png" alt="Service">
                  <p>Lorem ipsum dolor sit amet elit pretium ornare</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="service-item">
                  <h3>Online Marketing</h3>
                  <img src="img/icon-service-8.png" alt="Service">
                  <p>Lorem ipsum dolor sit amet elit pretium ornare</p>
               </div>
            </div>
         </div>
      </div>
   </div> -->
<!-- Service End -->


<!-- FAQs Start -->
<div class="faqs">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-6">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div id="accordion">
               <div class="card">
                  <div class="card-header">
                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                        Dimana Tempat Kerja Praktek?
                     </a>
                  </div>
                  <div id="collapseOne" class="collapse show" data-parent="#accordion">
                     <div class="card-body">
                        Kerja praktek dapat dilaksanakan di Lembaga/Instansi Pemerintah maupun swasta. Instansi swasta yang dapat menjadi tempat kerja praktek harus berbadan hukum (CV/PT/FIRMA)
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header">
                     <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                        Bagaimana Cara Mengusulkan Kerja Praktek?
                     </a>
                  </div>
                  <div id="collapseTwo" class="collapse" data-parent="#accordion">
                     <div class="card-body">
                        Usulan kerja praktek merupakan langkah pertama yang dilakukan bagi mahasiswa yang akan menempuh mata kuliah Kerja Praktek. Pengajuan KP masih bisa dilakukan sebelum 2 bulan pelaksanaan Kerja Praktek, jika kurang dari 2 bulan dan mahasiswa belum mendapat tempat Kerja Praktek, maka Koordinator KP mengkoordinasikan dengan Wakil Direktur Bidang 4.
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header">
                     <a class="card-link" data-toggle="collapse" href="#collapseThree">
                        Waktu Pelaksanaan dan Lama Kerja Praktek
                     </a>
                  </div>
                  <div id="collapseThree" class="collapse" data-parent="#accordion">
                     <div class="card-body">
                        Pelaksanaan Kerja Praktek dijadwalkan selama 3 bulan atau selama 11-12 minggu. Jadwal pelaksanaan KP di PENS dibagi menjadi dua periode. Periode pertama dikhususkan untuk prodi di Tingkat Diploma 4 dan periode kedua dikhususkan untuk prodi di tingkat Diploma 3
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header">
                     <a class="card-link" data-toggle="collapse" href="#collapseFour">
                        Bagaimana Ketentuan Dosen Pembimbing Kerja Praktek?
                     </a>
                  </div>
                  <div id="collapseFour" class="collapse" data-parent="#accordion">
                     <div class="card-body">
                        Pembimbing KP terdiri atas 2 yaitu pembimbing 1 berasal dari dosen di Jurusan setia mahasiswa yang ditentukan oleh kordinator KP dan pembimbing 2 (lapangan) berasal dari institusi tempat kerja praktek
                     </div>
                  </div>
               </div>
            </div>
            <a class="btn" href="">Ask more</a>
         </div>
         <div class="col-md-6">
            <img src="img/faqs.jpg" alt="Image">
         </div>
      </div>
   </div>
</div>
<!-- FAQs End -->


<!-- Testimonial Start -->
<!-- <div class="testimonial">
      <div class="container">
         <div class="section-header">
            <h2>Clients Review</h2>
            <p></p>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="testimonial-slider-nav">
                  <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                  <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                  <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                  <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                  <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                  <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                  <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                  <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="testimonial-slider">
                  <div class="slider-item">
                     <h3>Customer Name</h3>
                     <h4>profession</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                  </div>
                  <div class="slider-item">
                     <h3>Customer Name</h3>
                     <h4>profession</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                  </div>
                  <div class="slider-item">
                     <h3>Customer Name</h3>
                     <h4>profession</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                  </div>
                  <div class="slider-item">
                     <h3>Customer Name</h3>
                     <h4>profession</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                  </div>
                  <div class="slider-item">
                     <h3>Customer Name</h3>
                     <h4>profession</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                  </div>
                  <div class="slider-item">
                     <h3>Customer Name</h3>
                     <h4>profession</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                  </div>
                  <div class="slider-item">
                     <h3>Customer Name</h3>
                     <h4>profession</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                  </div>
                  <div class="slider-item">
                     <h3>Customer Name</h3>
                     <h4>profession</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Testimonial End -->


<!-- News Start -->
<!-- <div class="news">
      <div class="container-fluid">
         <div class="row align-items-center">
            <div class="col-md-6">
               <img src="img/news.jpg" alt="Image">
            </div>
            <div class="col-md-6">
               <h2 class="section-title">Read Latest News</h2>
               <p>
                  Kerja Praktik (KP) merupakan kegiatan yang berbentuk pengamatan terhadap praktik kerja di industri, instansi atau laboratorium yang mengaplikasikan teori yang telah diperoleh. Seminar KP adalah kegiatan belajar yang berbentuk Laporan KP di depan forum seminar yang dihadiri oleh Dosen Pembimbing KP dan para mahasiswa yang berhak hadir. Sebelum melakukan Kerja Praktik, berikut merupakan persyaratan-persyaratan yang harus diperhatikan Kerja Praktik
               </p>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
               </p>
               <a class="btn" href="">Learn More</a>
            </div>
         </div>
      </div>
   </div> --> -->
<!-- News End -->


<!-- Call to Action Start -->
<div class="call-to-action">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-9">
            <h2>bridge to the future</h2>
            <p>
            </p>
         </div>
         <div class="col-md-3">
            <a class="btn" href="https://htmlcodex.com/contact">Contact Us</a>
         </div>
      </div>
   </div>
</div>
<!-- Call to Action End -->
</div>