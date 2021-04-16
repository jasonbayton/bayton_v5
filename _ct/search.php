<?php
$search = strtolower($_GET['keyword']);
?>

<section id="page_container">
	<article>
		<h2 id="article_title">
			Site search
		</h2>
    <h3 class="search-heading">
      <?php echo 'Results for: "' . $search . '"' ?>
    </h3>
    <ul>
		<?php
		$exactMatch = [];
		foreach ($posts as $post) {
			$exactMatch[] = searchArray($post, explode(' ', $_GET['keyword']), true);
		}

		foreach (array_filter($exactMatch) as $result) {
			echo '<li><!--' . $result['order'] . '--><a href="' . $result['url'] . '">' . $result['title'] . '</a></li>';
		}

		?>
    </ul>
		<h3 class="search-heading">
			Similar Results based on: "<?php echo $search; ?>"
		</h3>
    <ul>
		<?php

		$closeMatch = [];
		foreach ($posts as $post) {
			$closeMatch[] = searchArray($post, explode(' ', $_GET['keyword']), false);
		}

		foreach (array_filter($closeMatch) as $result) {
			echo '<li><!--' . $result['order'] . '--><a href="' . $result['url'] . '">' . $result['title'] . '</a></li>';
		}

    ?>
    </ul>
    <?php
		function searchArray(array $haystack, array $needles, bool $direct = true) {
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

			if ($direct === false && $matchCount !== 0 && $matchCount !== $needleCount) {
				return $haystack;
			}

			if ($direct === true && $matchCount !== 0 && $needleCount === $matchCount) {
				return $haystack;
			}
		}

		?>
		</div>
	</article>
</section>
