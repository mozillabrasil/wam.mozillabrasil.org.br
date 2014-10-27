<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Events extends MY_Controller {

    public $list_did_you_know = array(
        array(
            'description' => 'Que se você ama o Firefox, você pode ajudar? <br /> Ajudando outros usuários do Firefox no Twitter. <br /> Coisas boas virão a quem twittar! ',
            'link' => 'https://support.mozilla.org/pt-BR/army-of-awesome'
        ),
        array(
            'description' => 'Que a Mozilla lançou um app para Firefox que mostra quais empresas estão rastreando você ?',
            'link' => 'https://addons.mozilla.org/pt-BR/firefox/addon/lightbeam/'
        ),
        array(
            'description' => 'Que o “verdadeiro” firefox não é uma raposa',
            'link' => 'http://br.mozdev.org/firefox/firefox'
        ),
        array(
            'description' => 'Que o Firefox é considerado o mais seguro para guardar senhas!',
            'link' => 'http://mundofirefox.com/firefox-e-considerado-o-mais-seguro-para-guardar-senhas/'
        ),
        array(
            'description' => 'Que o Firefox é desenvolvido pela Mozilla,  uma comunidade global trabalhando em conjunto para tornar a internet melhor. <br /> Nós acreditamos que a internet deve se aberta, pública e acessível a todos sem quaisquer restrições.',
            'link' => 'https://www.mozilla.org/pt-BR/contribute/'
        ),
        array(
            'description' => 'Que a Mozilla Brasil está presente no Facebook ?',
            'link' => 'https://www.facebook.com/mozillabrasil'
        ),
        array(
            'description' => 'Que a Mozilla Brasil está no Twitter ?',
            'link' => 'https://twitter.com/mozillabrasil'
        ),
        array(
            'description' => 'Que existe celulares com o sitema operacional Firefox OS ?',
            'link' => 'https://www.mozilla.org/pt-BR/firefox/os/'
        ),
        array(
            'description' => 'Que existem milhares de pessoas ensinando a web ?',
            'link' => 'https://webmaker.org/'
        ),
        array(
            'description' => 'Que a Mozilla possui um leitor de email ?',
            'link' => 'https://www.mozilla.org/pt-BR/thunderbird/'
        )
    );

    public function __construct() {
        parent::__construct();
        $this->load->model('events_model');
    }

    public function index() {
        $data = array(
            'count_events' => $this->events_model->get_count(),
            'list_did_you_know' => $this->list_did_you_know[rand(0, (count($this->list_did_you_know) - 1))]
        );
        $pages_events = explode('.', $data['count_events'] / 5);
        $data['pages_events'] = (int) $pages_events[0];
        $this->render('events/index', $data);
    }

    public function page($page_number) {
        $list_events = $this->events_model->get_last(5, $page_number);
        $html = '';
        foreach ($list_events as $key => $event) {
            $html .= '<div class="col-lg-12 pm-column-spacing">';
            $html .= $this->load->view('events/header', $event->serverData, true);
            $html .= '</div>';
        }
        echo $html;
    }

    public function view($objectId) {
        $data = array(
            'list_did_you_know' => $this->list_did_you_know[rand(0, (count($this->list_did_you_know) - 1))],
            'event' => $this->events_model->get($objectId)
        );
        $this->render('events/view', $data);
    }

}
