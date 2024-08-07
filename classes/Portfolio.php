<?php
class Portfolio {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getProjects() {
        $query = "SELECT * FROM projects";
        $result = $this->db->query($query);
        $projects = [];
        while ($row = $result->fetch_assoc()) {
            $projects[] = $row;
        }
        return $projects;
    }
    public function addProject($title, $description, $image, $link) {
        $stmt = $this->db->prepare("INSERT INTO projects (title, description, image, link) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('ssss', $title, $description, $image, $link);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
    public function getProjectById($id) {
        $stmt = $this->db->prepare("SELECT * FROM projects WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $project = $result->fetch_assoc();
        $stmt->close();
        return $project;
    }
    
    public function updateProject($id, $title, $description, $image, $link) {
        $stmt = $this->db->prepare("UPDATE projects SET title = ?, description = ?, image = ?, link = ? WHERE id = ?");
        $stmt->bind_param('ssssi', $title, $description, $image, $link, $id);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
    public function deleteProject($id) {
        $stmt = $this->db->prepare("DELETE FROM projects WHERE id = ?");
        $stmt->bind_param('i', $id);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
       
    public function addContact($name, $email, $message) {
        $stmt = $this->db->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param('sss', $name, $email, $message);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
}
?>