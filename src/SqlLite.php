<?php 
namespace SV\SLUG;

use PDO, PDOException;

/**
 * SqlLite
 */
class SqlLite
{
	private $db;
	function __construct()
	{
		try {
			$this->db = new PDO('sqlite:../db/listSlug.db');
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			echo $e->getMessage();
			return;
		}
	}

	private function insert(string $slug)
	{
		$SlugExists = $this->db->query("SELECT count(slug) as nslugs FROM slugs WHERE slug LIKE '$slug%'");
		$count = $SlugExists->fetchColumn(0);
		if( $count !== '0' ) {
			$slug = $slug.$count;
			$this->db->exec("INSERT INTO slugs (slug) VALUES ('$slug')");
		} else {
			$this->db->exec("INSERT INTO slugs (slug) VALUES ('$slug')");
		}
		return $slug;
	}

	public function getSlugUnique( string $slug) {
		return $this->insert($slug);
	}
}
?>