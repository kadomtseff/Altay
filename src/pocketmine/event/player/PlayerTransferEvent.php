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

use pocketmine\event\Cancellable;
use pocketmine\event\CancellableTrait;
use pocketmine\Player;

class PlayerTransferEvent extends PlayerEvent implements Cancellable{
	use CancellableTrait;

	/** @var string */
	protected $address;
	/** @var int */
	protected $port = 19132;

	/**
	 * @param Player $player
	 * @param string $address
	 * @param int    $port
	 */
	public function __construct(Player $player, string $address, int $port){
		$this->player = $player;
		$this->address = $address;
		$this->port = $port;
	}

	/**
	 * @return string
	 */
	public function getAddress() : string{
		return $this->address;
	}

	/**
	 * @param string $address
	 */
	public function setAddress(string $address) : void{
		$this->address = $address;
	}

	/**
	 * @return int
	 */
	public function getPort() : int{
		return $this->port;
	}

	/**
	 * @param int $port
	 */
	public function setPort(int $port) : void{
		$this->port = $port;
	}
}