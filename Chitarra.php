<?php

class Chitarra
{
    function __construct(Object $info)
    {
        $this->id = $info->getId();
        $this->create = $info->getSystemProperties()->getCreatedAt();
        $this->update = $info->getSystemProperties()->getUpdatedAt();
        $this->marchio = $info->marchio;
        $this->alias = $info->alias;
        $this->modello = $info->modello;
        $this->seriale = $info->seriale;
        $this->voto = $info->voto;
        $this->anno = $info->anno;
        $this->circa = $info->circa;
        $this->acquisita = $info->acquisita;
        $this->produzione = $info->produzione;
        $this->ponte = $info->ponte;
        $this->configurazione = $info->configurazione;
        $this->pickups = $info->pickups;
        $this->tasti = $info->tasti;
        $this->corpo = $info->corpo;
        $this->top = $info->top;
        $this->manico = $info->manico;
        $this->tastiera = $info->tastiera;
        $this->corde = $info->corde;
        $this->costo = $info->costo;
        $this->colore = $info->colore;
        $this->scalaCorde = $info->scalaCorde;
        $this->accordatura = $info->accordatura;
        $this->descrizione = $info->descrizione;
        $this->modifiche = $info->modifiche;
        $this->fronte = $info->fronte;
        $this->retro = $info->retro;
        $this->galleria = $info->galleria;
    }

    public function create($format = 'd/m/Y'){
        $time = $this->create->getTimestamp();
        return date($format, $time);
    }

    public function update($format = 'd/m/Y'){
        $time = $this->update->getTimestamp();
        return date($format, $time);
    }

    public function alias(){
        return $this->alias;
    }

    public function marchio(){
        return $this->marchio;
    }

    public function modello(){
        return $this->modello;
    }

    public function title(){
        return $this->marchio.' `'.$this->alias.'` '.$this->modello;
    }

    public function anno(){
        if(!$this->anno){
            return $this->void();
        }elseif ($this->circa){
            return $this->anno.' ca.';
        }else{
            return $this->anno;
        }
    }

    public function acquisita(){
        return $this->acquisita ?: $this->void();
    }

    public function seriale(){
        return strtoupper($this->seriale) ?: $this->void();
    }

    public function corpo(){
        return $this->corpo ?: false;
    }

    public function top(){
        return $this->top ?: false;
    }

    public function manico(){
        return $this->manico ?: false;
    }

    public function tastiera(){
        return $this->tastiera ?: false;
    }

    public function tasti(){
        return $this->tasti ?: $this->void();
    }

    public function colore(){
        return $this->colore ?: $this->void();
    }

    public function ponte(){
        return $this->ponte ?: $this->void();
    }

    public function configurazione(){
        return $this->configurazione ?: $this->void();
    }

    public function pickups(){
        return $this->pickups ?: false;
    }

    public function corde(){
        return $this->corde ?: $this->void();
    }

    public function scalaCorde(){
        return $this->scalaCorde ?: false;
    }

    public function accordatura(){
        return $this->accordatura ?: $this->void();
    }

    public function costo(){
        return $this->costo ?: $this->void();
    }

    public function voto(){
        $max = 5;
        $stars = [];

        $icon_full = '<i class="fas fa-star"></i>';
        $icon_empty = '<i class="far fa-star"></i>';

        for ($i=0; $i < $this->voto; $i++) {
            $stars[] = $icon_full;
        }
        for ($i=0; $i < $max-$this->voto; $i++) {
            $stars[] = $icon_empty;
        }

        $stars = implode('', $stars);
        return $stars;
    }

    public function produzione(){
        return $this->produzione ?: $this->void();
    }

    public function descrizione(){
        if(!$this->descrizione) return false;

        $renderer = new Contentful\RichText\Renderer();
        return $renderer->render($this->descrizione);
    }

    public function modifiche(){
        if(!$this->modifiche) return false;

        $renderer = new Contentful\RichText\Renderer();
        return $renderer->render($this->modifiche);
    }

    private function void(){
        return '<span class="void">n/a</span>';
    }
}
