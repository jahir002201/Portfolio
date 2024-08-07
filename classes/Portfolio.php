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

    public function addContact($name, $email, $message) {
        $stmt = $this->db->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param('sss', $name, $email, $message);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
}
?>