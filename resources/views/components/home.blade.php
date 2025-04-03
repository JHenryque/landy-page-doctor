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
                <button>AGENDA CONSULTA</button>
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

    <section class="container-sobre">
        <div class="sobre">
            <img data-aos="fade-up" data-aos-duration="1000" src="{{ asset('assets/images/foto-sobre.avif')}}" alt="Medica">
            <div  data-aos="fade-down" data-aos-duration="1000" class="sobre-text">
                <h1>SOBRE MIM</h1>
                <h2>DR. Marcela Santos Pereira</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam illum voluptatibus iusto obcaecati exercitationem sequi facilis at itaque, quaerat vel ipsum harum. Perspiciatis repellat, ex non pariatur omnis est expedita amet unde saepe. Aut doloremque cupiditate voluptate dicta similique eos harum at cumque facere. Animi eligendi voluptate ut quod doloremque molestiae, doloribus aut recusandae natus suscipit labore ratione ipsum quia qui non, maxime facilis eveniet odio. Quo optio soluta ea, minima reprehenderit asperiores quod! Consequuntur suscipit quod obcaecati beatae eius voluptatibus consectetur, eaque laboriosam! Corporis quos labore consequuntur? Labore, tempora. Consequatur nemo rem debitis est dolorum, voluptate autem atque illum.</p>
            </div>
        </div>
    </section>
 
    <section class="container-servicos">
        <div class="servicos">
            <h1>Serviços</h1>
            <h3>Como podemos ajudá-lo a se sentir melhor?</h3>
            <div class="cards-servicos">
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
        </div>
    </section>

</x-main-layouts>