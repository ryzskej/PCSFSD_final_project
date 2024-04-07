<?php 

namespace App\models;

use App\utils\Debug;

class Tree extends BaseModel
{
    public function all()
    {
        return $this->database->sql('SELECT * FROM trees');
    }

    public function whereIsMature()
    {
        return $this->database->sql('SELECT whereIsMature FROM trees where whereIsMature = "podzimni"');
    }

    public function create($data = [])
    {
        $this->database->sql("INSERT INTO trees (tree, height, description, user_id, whereIsMature) VALUES ("."'".$data['firstNameT']."'".","."'".$data['heightT']."'".", "."'".$data['descriptionT']."'".", 0, "."'".$data['whereIsMature']."'".")");
    }

    public function deleteTree($id)
    {
        $this->database->sql("DELETE FROM trees WHERE id = "."'".$id."'");
    }

    public function update(array $post)
    {
           Debug::dump($post);
        $sql = 'UPDATE trees SET tree = "'.$post['firstNameT'].'", height = "'.$post['heightT'].'", description = "'.$post['descriptionT'].'" WHERE id = "'.$post['id'].'"';

        $this->database->sql($sql);
    }

    public function findTree($id)
    {
        return $this->database->sql("SELECT * FROM trees where id = "."'".$id."'");
    }
}