<?php

/*
 *               _ _
 *         /\   | | |
 *        /  \  | | |_ __ _ _   _
 *       / /\ \ | | __/ _` | | | |
 *      / ____ \| | || (_| | |_| |
 *     /_/    \_|_|\__\__,_|\__, |
 *                           __/ |
 *                          |___/
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author TuranicTeam
 * @link https://github.com/TuranicTeam/Altay
 *
 */

declare(strict_types=1);

namespace pocketmine\event\player;

use pocketmine\entity\Human;
use pocketmine\event\Cancellable;
use pocketmine\event\CancellableTrait;
use pocketmine\event\entity\EntityEvent;

/**
 * Called when a player gains or loses XP levels and/or progress.
 */
class PlayerExperienceChangeEvent extends EntityEvent implements Cancellable{
	use CancellableTrait;

	/** @var Human */
	protected $entity;
	/** @var int */
	private $oldLevel;
	/** @var float */
	private $oldProgress;
	/** @var int|null */
	private $newLevel;
	/** @var float|null */
	private $newProgress;

	public function __construct(Human $player, int $oldLevel, float $oldProgress, ?int $newLevel, ?float $newProgress){
		$this->entity = $player;

		$this->oldLevel = $oldLevel;
		$this->oldProgress = $oldProgress;
		$this->newLevel = $newLevel;
		$this->newProgress = $newProgress;
	}

	/**
	 * @return int
	 */
	public function getOldLevel() : int{
		return $this->oldLevel;
	}

	/**
	 * @return float
	 */
	public function getOldProgress() : float{
		return $this->oldProgress;
	}

	/**
	 * @return int|null null indicates no change
	 */
	public function getNewLevel() : ?int{
		return $this->newLevel;
	}

	/**
	 * @return float|null null indicates no change
	 */
	public function getNewProgress() : ?float{
		return $this->newProgress;
	}

	/**
	 * @param int|null $newLevel
	 */
	public function setNewLevel(?int $newLevel) : void{
		$this->newLevel = $newLevel;
	}

	/**
	 * @param float|null $newProgress
	 */
	public function setNewProgress(?float $newProgress) : void{
		$this->newProgress = $newProgress;
	}
}