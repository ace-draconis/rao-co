<?php declare(strict_types = 1);

namespace PHPStan\Rules\Deprecations;

use PhpParser\Node;
use PhpParser\Node\Stmt\Class_;
use PHPStan\Analyser\Scope;
use PHPStan\Broker\Broker;

class ImplementationOfDeprecatedInterfaceRule implements \PHPStan\Rules\Rule
{

	/** @var Broker */
	private $broker;

	public function __construct(Broker $broker)
	{
		$this->broker = $broker;
	}

	public function getNodeType(): string
	{
		return Class_::class;
	}

	/**
	 * @param Class_ $node
	 * @param \PHPStan\Analyser\Scope $scope
	 * @return string[] errors
	 */
	public function processNode(Node $node, Scope $scope): array
	{
		if (DeprecatedScopeHelper::isScopeDeprecated($scope)) {
			return [];
		}

		$errors = [];

		$className = isset($node->namespacedName)
			? (string) $node->namespacedName
			: (string) $node->name;

		try {
			$class = $this->broker->getClass($className);
		} catch (\PHPStan\Broker\ClassNotFoundException $e) {
			return [];
		}

		if ($class->isDeprecated()) {
			return [];
		}

		foreach ($node->implements as $implement) {
			$interfaceName = (string) $implement;

			try {
				$interface = $this->broker->getClass($interfaceName);

				if ($interface->isDeprecated()) {
					$description = null;
					if (method_exists($interface, 'getDeprecatedDescription')) {
						$description = $interface->getDeprecatedDescription();
					}
					if (!$class->isAnonymous()) {
						if ($description === null) {
							$errors[] = sprintf(
								'Class %s implements deprecated interface %s.',
								$className,
								$interfaceName
							);
						} else {
							$errors[] = sprintf(
								"Class %s implements deprecated interface %s:\n%s",
								$className,
								$interfaceName,
								$description
							);
						}
					} else {
						if ($description === null) {
							$errors[] = sprintf(
								'Anonymous class implements deprecated interface %s.',
								$interfaceName
							);
						} else {
							$errors[] = sprintf(
								"Anonymous class implements deprecated interface %s:\n%s",
								$interfaceName,
								$description
							);
						}
					}
				}
			} catch (\PHPStan\Broker\ClassNotFoundException $e) {
				// Other rules will notify if the interface is not found
			}
		}

		return $errors;
	}

}
