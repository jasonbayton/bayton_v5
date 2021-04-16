<?php
$search = strtolower($_GET['keyword']);
?>

<section id="page_container">
	<article>
		<h2 id="article_title">
			<?php echo 'Results for "' . $search . '"' ?>
		</h2>
		<?php
		$results = [];
		foreach ($posts as $post) {
			$results[] = searchArray($post, explode(' ', $_GET['keyword']));
		}

		foreach (array_filter($results) as $result) {
			echo '<li><!--' . $result['order'] . '--><a href="' . $result['url'] . '">' . $result['title'] . '</a></li>';
		}

		function searchArray(array $haystack, array $needles) {
			$needleCount = count($needles);
			$matches = [];
			foreach ($needles as $needle) {
				$matches[$needle] = 0;
			}

			foreach ($needles as $needle) {
				foreach ($haystack as $row) {
					if (!is_array($row) && stripos($row, $needle)) {
						$matches[$needle] += 1;
					} elseif (is_array($row)) {
						foreach ($row as $item) {
							if (stripos($item, $needle)) {
								$matches[$needle] += 1;
							}
						}
					}
				}
			}

			$filteredArray = array_filter($matches);
			$matchCount = count($filteredArray);

			if ($matchCount !== 0 && $needleCount === $matchCount) {
				return $haystack;
			}
		}
		?>
    <h2 id="article_title">
			<?php echo 'Similar results based on the search: "' . $search . '"' ?>
		</h2>
		</div>
	</article>
</section>
