<?php

class Artigo
{
    public function exibirTodos() :array
    {   
        return $artigos= [
            [
            'titulo' => 'Primeiros passos com Spring',
            'Conteudo'=> ' Na empresa onde trabalho começamos um Coding Dojo, que é basicamente uma reunião com programadores e
            programadoras a fim de resolver desafios e aperfeiçoar as habilidades com algoritmos.',
            'Link' => 'primeiros-passos-com-spring.html'
            ],
            [
                'titulo' => 'O que é Metodologia Ágil?',
                'Conteudo'=> ' Uma vez fui contratada por uma empresa que desenvolvia softwares e aplicativos para outras empresas.',
                'Link' => 'como-e-o-funil-do-growth-hacking.html'
            ],
            [
                'titulo' => ' Como é o funil do Growth Hacking?',
                'Conteudo'=> ' Minha amiga que possui um clube de assinaturas começou a utilizar o Growth Hacking após conhecer um pouco
                mais sobre ele.',
                'Link' => 'como-e-o-funil-do-growth-hacking.html'
            ],
        
        
            ];
        
    }
}







?>