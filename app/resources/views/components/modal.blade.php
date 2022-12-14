<div class="portfolio-modal modal fade" id="portfolioModal{{ $index }}" tabindex="-1"
    aria-labelledby="portfolioModal1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                    aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $titulo }}
                            </h2>
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-laptop-code"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <img class="img-fluid rounded mb-5" src="/assets/img/portfolio/{{ $imagem }}"
                                alt="{{ $titulo }}" />
                            <p class="mb-4">
                                {{ $descricao }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
