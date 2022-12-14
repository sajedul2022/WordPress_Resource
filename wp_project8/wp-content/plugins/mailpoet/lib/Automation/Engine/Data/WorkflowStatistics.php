<?php declare(strict_types = 1);

namespace MailPoet\Automation\Engine\Data;

if (!defined('ABSPATH')) exit;


class WorkflowStatistics {

  private $workflowId;
  private $versionId;
  private $entered;
  private $inProgress;

  public function __construct(
    int $workflowId,
    int $entered = 0,
    int $inProcess = 0,
    ?int $versionId = null
  ) {
    $this->workflowId = $workflowId;
    $this->entered = $entered;
    $this->inProgress = $inProcess;
    $this->versionId = $versionId;
  }

  public function getWorkflowId(): int {
    return $this->workflowId;
  }

  public function getVersionId(): ?int {
    return $this->versionId;
  }

  public function getEntered(): int {
    return $this->entered;
  }

  public function getInProgress(): int {
    return $this->inProgress;
  }

  public function getExited(): int {
    return $this->getEntered() - $this->getInProgress();
  }

  public function toArray(): array {
    return [
      'workflow_id' => $this->getWorkflowId(),
      'totals' => [
        'entered' => $this->getEntered(),
        'in_progress' => $this->getInProgress(),
        'exited' => $this->getExited(),
      ],
    ];
  }
}
