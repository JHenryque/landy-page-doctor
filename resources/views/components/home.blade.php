<x-main-layouts title="Home">
    <section class="container_banner">
        <div class="banner">
            <div  data-aos="fade-right"
                  data-aos-offset="300"
                  data-aos-easing="ease-in-sine" 
                  class="banner-text" >
                <h1>Agendamentos Online</h1>
                <p>Atendimento 24 horas, 7 dias da semana</p>
                <h3>Soluções completas de cuidados de saúde para todos</h3>
               <a href="{{ route('agendar-contato') }}"> <button>AGENDER CONSULTA</button></a>
            </div>
            <div class="circulo-cor"></div>
            <div class="finta-cor">
                <div data-aos="fade-right" data-aos-duration="2000" class="valores-atendidos">
                    <h1>+3.500</h1>
                    <p>Pacientes atendidos</p>
                </div>
                <div data-aos="flip-left" data-aos-duration="3000" class="valores-atendidos">
                    <h1>+10</h1>
                    <p>Anos no mercado</p>
                </div>
                <div data-aos="fade-left" data-aos-duration="4000" class="valores-atendidos">
                    <h1>24/7</h1>
                    <p>Online Suporte</p>
                </div>
            </div>
            <img src="{{ asset('assets/images/img-medica.png')}}" alt="Medica">
        </div>
    </section>

    <section class="container-sobre" id="sobre">
        <div class="sobre">
            <img data-aos="fade-up" data-aos-duration="1000" src="{{ asset('assets/images/foto-sobre.avif')}}" alt="Medica">
            <div  data-aos="fade-down" data-aos-duration="1000" class="sobre-text">
                <h1>SOBRE MIM</h1>
                <h2>DR. Marcela Santos Pereira</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam illum voluptatibus iusto obcaecati exercitationem sequi facilis at itaque, quaerat vel ipsum harum. Perspiciatis repellat, ex non pariatur omnis est expedita amet unde saepe. Aut doloremque cupiditate voluptate dicta similique eos harum at cumque facere. Animi eligendi voluptate ut quod doloremque molestiae, doloribus aut recusandae natus suscipit labore ratione ipsum quia qui non, maxime facilis eveniet odio. Quo optio soluta ea, minima reprehenderit asperiores quod! Consequuntur suscipit quod obcaecati beatae eius voluptatibus consectetur, eaque laboriosam! Corporis quos labore consequuntur? Labore, tempora. Consequatur nemo rem debitis est dolorum, voluptate autem atque illum.</p>
            </div>
        </div>
    </section>
 
    <section class="container-servicos" id="servicos">
        <div data-aos="zoom-in" data-aos-duration="1000"  class="servicos">
            <h1>Serviços</h1>
            <h3>Como podemos ajudá-lo a se sentir melhor?</h3>
            <button class="arrow left-arrow" id="left-arrow"><i class="fa-solid fa-arrow-left"></i></button>
            <div class="cards-servicos"  id="scrollContainer">
                <div class="card">
                    <i class="fa-solid fa-notes-medical"></i>
                    <div class="card-text">
                        <h2>Problemas digestivo</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, necessitatibus harum vel rerum ratione dolore? Odit expedita voluptates velit fugit.</p>
                    </div>       
                </div>
                <div class="card">
                    <i class="fa-solid fa-capsules"></i>
                    <div class="card-text">
                        <h2>Saúde Hormonal</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, necessitatibus harum vel rerum ratione dolore? Odit expedita voluptates velit fugit.</p>
                    </div> 
                </div>
                <div class="card">
                    <i class="fa-solid fa-head-side-virus"></i>
                    <div class="card-text">
                        <h2>Bem-estar mental</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, necessitatibus harum vel rerum ratione dolore? Odit expedita voluptates velit fugit.</p>
                    </div> 
                </div>
                <div class="card">
                    <i class="fa-solid fa-lungs-virus"></i>
                    <div class="card-text">
                        <h2>Cuidados Pediátricos</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, necessitatibus harum vel rerum ratione dolore? Odit expedita voluptates velit fugit.</p>
                    </div> 
                </div>
                <div class="card">
                    <i class="fa-solid fa-bacteria"></i>
                    <div class="card-text">
                        <h2>Autoimune e Inflamação</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, necessitatibus harum vel rerum ratione dolore? Odit expedita voluptates velit fugit.</p>
                    </div> 
                </div>
                <div class="card">
                    <i class="fa-solid fa-heart"></i>
                    <div class="card-text">
                        <h2>Saúde do Coração</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, necessitatibus harum vel rerum ratione dolore? Odit expedita voluptates velit fugit.</p>
                    </div> 
                </div>
            </div>
            <button class="arrow right-arrow" id="right-arrow"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </section>

    <section class="faq-section" id="faq">
    <h3>Dúvidas Frequentes</h3>

    <div data-aos="flip-up" data-aos-duration="1200" class="faq-item">
      <div class="faq-question">🩺 Como agendar uma consulta?</div>
      <div class="faq-answer">Você pode agendar pelo nosso site, WhatsApp ou telefone. Também atendemos via agendamento presencial.</div>
    </div>

    <div data-aos="flip-up" data-aos-duration="1200" class="faq-item">
      <div class="faq-question">📄 Quais documentos devo levar?</div>
      <div class="faq-answer">Leve um documento com foto, cartão do plano de saúde (se tiver) e exames anteriores, se disponíveis.</div>
    </div>

    <div data-aos="flip-up" data-aos-duration="1200" class="faq-item">
      <div class="faq-question">💳 Quais formas de pagamento são aceitas?</div>
      <div class="faq-answer">Aceitamos cartão de crédito, débito, Pix e transferência bancária.</div>
    </div>

    <div data-aos="flip-up" data-aos-duration="1200" class="faq-item">
      <div class="faq-question">🧾 Vocês emitem nota fiscal?</div>
      <div class="faq-answer">Sim, emitimos nota fiscal para todos os atendimentos particulares e reembolsáveis por planos.</div>
    </div>

    <div data-aos="flip-up" data-aos-duration="1200" class="faq-item">
      <div class="faq-question">🌐 Atendem por telemedicina?</div>
      <div class="faq-answer">Sim! Oferecemos consultas online via videochamada com agendamento prévio.</div>
    </div>
  </section>
  <section class="container-contato" id="contato">
      <h1>Contatos</h1>
   <div class="contato">
        <ul class="contato-ul">
            <li data-aos="zoom-in-right"><i class="fa-solid fa-envelope"></i> clinicamedica@gmail.com</li>
            <li data-aos="zoom-out"><i class="fa-brands fa-whatsapp"></i> (87) 99999-9999</li>
            <li data-aos="zoom-out-up"><a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
            <li data-aos="zoom-out-down"><a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
        </ul>

        <div data-aos="zoom-in-up" class="local">
             <h3>Minha Localização</h3>
            <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7883.325225422837!2d-36.48490600000006!3d-8.910923999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7070c53cc4570d3%3A0x3188fea7cc29c203!2sR.%20Prof.%20Fernando%20Souto%20-%20Francisco%20Sim%C3%A3o%20Dos%20Santos%20Figueira%2C%20Garanhuns%20-%20PE%2C%2055299-310%2C%20Brasil!5e0!3m2!1spt-BR!2sus!4v1743740541162!5m2!1spt-BR!2sus" width="400px" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
   </div>
  </section>    
</x-main-layouts>