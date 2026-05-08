<!-- CONTACTO -->
<section id="contacto" class="section">
  <div class="container">
    <div style="text-align:center;margin-bottom:3rem;" class="reveal">
      <p class="section-label">Contacto</p>
      <h2>Comencemos a trabajar <span class="grad-text">juntos.</span></h2>
      <p style="margin-top:.8rem;max-width:480px;margin-left:auto;margin-right:auto;">Cuéntanos sobre tu proyecto.
        Revisamos cada solicitud con atención y te respondemos en menos de 24 h.</p>
    </div>
    <div class="contacto-grid">
      <div class="reveal">
        <div class="contact-info-list">
          <div class="contact-row">
            <div class="cicon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                <polyline points="22,6 12,13 2,6" />
              </svg></div>
            <div>
              <p>Correo electrónico</p><small>contacto@linabat.com</small>
            </div>
          </div>
          <div class="contact-row">
            <div class="cicon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path
                  d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19 19 0 0 1 4.13 12.7a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.07 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
              </svg></div>
            <div>
              <p>Teléfono / WhatsApp</p><small>+52 734 143 9936</small>
            </div>
          </div>
          <div class="contact-row">
            <div class="cicon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
              </svg></div>
            <div>
              <p>Ubicación</p><small>Morelos, México</small>
            </div>
          </div>
        </div>
      </div>
      <div class="form-wrap reveal delay-1">
        <h3>Envíanos un mensaje</h3>
          <form id="contactForm" class="form-grid-inner">

          <div class="form-row2">
            <div class="fg">
              <label>Nombre</label>
              <input type="text" name="nombre" required>
            </div>

            <div class="fg">
              <label>Empresa</label>
              <input type="text" name="empresa">
            </div>
          </div>

          <div class="fg">
            <label>Correo electrónico</label>
            <input type="email" name="email" required>
          </div>

          <div class="fg">
            <label>Servicio</label>
            <select name="servicio" required>
              <option value="">Selecciona</option>
              <option>Estrategia Digital</option>
              <option>Diseño UX/UI</option>
              <option>Desarrollo Web</option>
              <option>SEO & Analítica</option>
              <option>Capacitación</option>
              <option>Mantenimiento</option>
              <option>Otro</option>
            </select>
          </div>

          <div class="fg">
            <label>Mensaje</label>
            <textarea name="mensaje" required></textarea>
          </div>

          <input type="text" name="website" style="display:none">

          <button type="submit" class="btn-submit">
            <span class="btn-text">Enviar mensaje →</span>
            <span class="btn-loader hidden"></span>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<div id="toast" class="toast hidden"></div>

<script src="js/send_email.js"></script>
