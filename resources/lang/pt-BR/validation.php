<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Linhas de linguagem de validação
    |--------------------------------------------------------------------------
    |
    | As seguintes linhas de linguagem contêm as mensagens de erro padrão usadas
    | pelo validador. Algumas dessas regras possuem várias versões, como as
    | regras de tamanho. Sinta-se à vontade para ajustar essas mensagens aqui.
    |
    */

    'accepted' => 'O campo :attribute deve ser aceito.',
    'active_url' => 'O campo :attribute não é uma URL válida.',
    'after' => 'O campo :attribute deve ser uma data posterior a :date.',
    'alpha' => 'O campo :attribute deve conter apenas letras.',
    'alpha_num' => 'O campo :attribute deve conter apenas letras e números.',
    'array' => 'O campo :attribute deve ser uma matriz (array).',
    'before' => 'O campo :attribute deve ser uma data anterior a :date.',
    'between' => [
        'numeric' => 'O campo :attribute deve estar entre :min e :max.',
        'string'  => 'O campo :attribute deve ter entre :min e :max caracteres.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'A confirmação do campo :attribute não confere.',
    'date' => 'O campo :attribute não é uma data válida.',
    'email' => 'O campo :attribute deve ser um endereço de e-mail válido.',
    'exists' => 'O campo :attribute selecionado é inválido.',
    'file' => 'O campo :attribute deve ser um arquivo.',
    'image' => 'O campo :attribute deve ser uma imagem.',
    'in' => 'O campo :attribute selecionado é inválido.',
    'integer' => 'O campo :attribute deve ser um número inteiro.',
    'max' => [
        'numeric' => 'O campo :attribute não pode ser maior que :max.',
        'string'  => 'O campo :attribute não pode ter mais que :max caracteres.',
    ],
    'min' => [
        'numeric' => 'O campo :attribute deve ser no mínimo :min.',
        'string'  => 'O campo :attribute deve ter no mínimo :min caracteres.',
    ],
    'not_in' => 'O campo :attribute selecionado é inválido.',
    'numeric' => 'O campo :attribute deve ser um número.',
    'required' => 'O campo :attribute é obrigatório.',
    'string' => 'O campo :attribute deve ser uma string.',
    'unique' => 'O campo :attribute já está sendo utilizado.',
    'url' => 'O campo :attribute deve ser uma URL válida.',

    /*
    |--------------------------------------------------------------------------
    | Atributos personalizados
    |--------------------------------------------------------------------------
    |
    | Aqui você pode traduzir os nomes dos atributos para uma versão mais
    | amigável, que será usada nas mensagens de erro.
    |
    */

    'attributes' => [
        'name' => 'nome',
        'description' => 'descrição',
        'document' => 'documento',
        // Adicione outros aqui conforme for criando
    ],

];
