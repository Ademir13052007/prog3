<?php 

class Livro {
    // Atributos privados
    private string $titulo;
    private string $autor;
    private int $anoPublicacao;
    private bool $disponivel;

    // Construtor (opcional)
    public function __construct(string $titulo = "", string $autor = "", int $anoPublicacao = 0, bool $disponivel = true) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = $disponivel;
    }

    // Métodos get e set para Título
    public function getTitulo(): string {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    // Métodos get e set para Autor
    public function getAutor(): string {
        return $this->autor;
    }

    public function setAutor(string $autor): void {
        $this->autor = $autor;
    }

    // Métodos get e set para Ano de Publicação
    public function getAnoPublicacao(): int {
        return $this->anoPublicacao;
    }

    public function setAnoPublicacao(int $ano): void {
        $this->anoPublicacao = $ano;
    }

    // Métodos get e set para Disponível
    public function isDisponivel(): bool {
        return $this->disponivel;
    }

    public function setDisponivel(bool $disponivel): void {
        $this->disponivel = $disponivel;
    }

    // Método extra para exibir informações formatadas
    public function exibirInformacoes(): void {
        echo "Título: " . $this->titulo . PHP_EOL;
        echo "Autor: " . $this->autor . PHP_EOL;
        echo "Ano de Publicação: " . $this->anoPublicacao . PHP_EOL;
        echo "Disponível: " . ($this->disponivel ? "Sim" : "Não") . PHP_EOL;
    }
}

// Exemplo de uso:
$livro = new Livro("Dom Casmurro", "Machado de Assis", 1899, true);
$livro->exibirInformacoes();
















?>