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

namespace pocketmine\event\server;

use pocketmine\event\Cancellable;
use pocketmine\event\CancellableTrait;
use pocketmine\network\mcpe\protocol\ClientboundPacket;
use pocketmine\Player;

class DataPacketSendEvent extends ServerEvent implements Cancellable{
	use CancellableTrait;

	/** @var ClientboundPacket */
	private $packet;
	/** @var Player */
	private $player;

	/**
	 * @param Player            $player
	 * @param ClientboundPacket $packet
	 */
	public function __construct(Player $player, ClientboundPacket $packet){
		$this->packet = $packet;
		$this->player = $player;
	}

	/**
	 * @return ClientboundPacket
	 */
	public function getPacket() : ClientboundPacket{
		return $this->packet;
	}

	/**
	 * @return Player
	 */
	public function getPlayer() : Player{
		return $this->player;
	}
}