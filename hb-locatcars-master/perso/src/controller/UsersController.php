<?php

namespace App\Controller;

class UsersController extends AbstractController {
    
    public function index() {

        $users = $this->container->getUserManager()->findAll();


        echo $this->container->getTwig()->render('/users/index.html.twig', [
            'users' => $users,
        ]);
    }

    public function show(int $id) {
        $user = $this->container->getUserManager()->findOneById($id);

        echo $this->container->getTwig()->render('/users/show.html.twig', [
            'user' => $user,
        ]);
    }

    public function new() {
        echo $this->container->getTwig()->render('/users/new.html.twig');
    }

    public function create()
    {
        $user = $this->container->getUserManager()->add();
        header('Location: '. $this->config['env']['base_path'].'/users/');
    }

    public function delete(int $id)
    {

        $user = $this->container->getUserManager()->supp($id);


        header('Location: ' . $this->config['env']['base_path'] . '/users/');
    }

    public function showEdit(int $id)
    {
        $user = $this->container->getUserManager()->findOneById($id);

        echo $this->container->getTwig()->render('/users/showedit.html.twig', [
            'user' => $user,
        ]);
    }

    public function edit(int $id)
    {
        $data = $_POST;
        $user = $this->container->getUserManager()->edit($id, $data);
        header('Location: ' . $this->config['env']['base_path'] . '/users/');
    }
}  
