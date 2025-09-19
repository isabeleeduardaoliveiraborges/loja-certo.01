<?php
include 'cabecalho.php';
?>

<header class="container mt-5">
    <h1 class="titulo-espaco">Livros de Regras</h1>
</header>

<main class="container mt-4">        
    <section>
        <h2>Livros em Destaque</h2>
        <div class="row">
            <div class="col-sm-4 mb-3">
              <div class="card h-100">
                <img src="img/tormenta.jpg" class="card-img-top" alt="Tormenta" style="height: 250px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">Tormenta RPG</h5>
                  <p class="card-text">Sistema brasileiro de RPG de fantasia</p>
                  <div class="mt-auto">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalProduto1">Veja mais detalhes...</a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-sm-4 mb-3">
              <div class="card h-100">
                <img src="img/ORDEM.jpg" class="card-img-top" alt="Ordem Paranormal" style="height: 250px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">Ordem Paranormal</h5>
                  <p class="card-text">RPG de investigação sobrenatural</p>
                  <div class="mt-auto">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalProduto2">Veja mais detalhes...</a>
                  </div>
                </div>
              </div> 
            </div>
            
            <div class="col-sm-4 mb-3">
              <div class="card h-100">
                <img src="img/ccc2.png" class="card-img-top" alt="Suplemento" style="height: 250px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">Suplemento de Regras</h5>
                  <p class="card-text">Expansão para sistemas de RPG</p>
                  <div class="mt-auto">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalProduto3">Veja mais detalhes...</a>
                  </div>
                </div>
              </div>
            </div> 
        </div>
    </section>

    <!-- Modal Produto 1 -->
    <div class="modal fade" id="modalProduto1" tabindex="-1" aria-labelledby="modalProduto1Label" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalProduto1Label">Tormenta RPG</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="img/tormenta.jpg" class="img-fluid rounded" alt="Tormenta">
              </div>
              <div class="col-md-6">
                <h4>Detalhes do Produto</h4>
                <p><strong>Preço:</strong> R$ 89,90</p>
                <p><strong>Páginas:</strong> 256</p>
                <p><strong>Editora:</strong> Jambô Editora</p>
                <p><strong>Disponibilidade:</strong> Em estoque</p>
              </div>
            </div>
            <div class="mt-3">
              <h5>Descrição</h5>
              <p>O livro "Tormenta" é uma obra de regras que permite a criação de mundos com sistemas próprios, facilitando a experiência de mestrar uma mesa de RPG. Com ele, você pode desenvolver suas próprias aventuras, personalizar personagens e explorar diversas possibilidades de jogo. Além disso, "Tormenta" oferece uma rica ambientação, com detalhes sobre mitologia, criaturas e culturas, tornando a experiência ainda mais imersiva.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <a href="listar.php?adicionar_carrinho=1&produto_nome=Tormenta+RPG&produto_preco=89.90" class="btn btn-success">Adicionar ao Carrinho</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Produto 2 -->
    <div class="modal fade" id="modalProduto2" tabindex="-1" aria-labelledby="modalProduto2Label" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalProduto2Label">Ordem Paranormal RPG</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="img/ORDEM.jpg" class="img-fluid rounded" alt="Ordem Paranormal">
              </div>
              <div class="col-md-6">
                <h4>Detalhes do Produto</h4>
                <p><strong>Preço:</strong> R$ 79,90</p>
                <p><strong>Páginas:</strong> 198</p>
                <p><strong>Editora:</strong> Jambô Editora</p>
                <p><strong>Disponibilidade:</strong> Em estoque</p>
              </div>
            </div>
            <div class="mt-3">
              <h5>Descrição</h5>
              <p>"Ordem Paranormal" é uma obra que explora o sobrenatural, proporcionando novas mecânicas e opções para jogadores e mestres. Este livro permite que você adentre um mundo de mistérios, investigações e criaturas além da compreensão humana, criando histórias emocionantes e desafiadoras.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <a href="listar.php?adicionar_carrinho=2&produto_nome=Ordem+Paranormal+RPG&produto_preco=79.90" class="btn btn-success">Adicionar ao Carrinho</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Produto 3 -->
    <div class="modal fade" id="modalProduto3" tabindex="-1" aria-labelledby="modalProduto3Label" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalProduto3Label">Suplemento de Regras</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="img/ccc2.png" class="img-fluid rounded" alt="Suplemento">
              </div>
              <div class="col-md-6">
                <h4>Detalhes do Produto</h4>
                <p><strong>Preço:</strong> R$ 49,90</p>
                <p><strong>Páginas:</strong> 120</p>
                <p><strong>Editora:</strong> RPG Editora</p>
                <p><strong>Disponibilidade:</strong> Em estoque</p>
              </div>
            </div>
            <div class="mt-3">
              <h5>Descrição</h5>
              <p>Este suplemento contém regras adicionais, novas classes, habilidades especiais e itens mágicos para expandir suas campanhas de RPG. Perfeito para mestres que queren enriquecer suas aventuras com mais opções e conteúdo exclusivo para seus jogadores.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <a href="listar.php?adicionar_carrinho=3&produto_nome=Suplemento+de+Regras&produto_preco=49.90" class="btn btn-success">Adicionar ao Carrinho</a>
          </div>
        </div>
      </div>
    </div>
</main>

<?php
include 'rodape.php';
?>