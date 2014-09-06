<?php namespace App\User\Register;

use App\User\UserRepo;
use Laracasts\Commander\CommandHandler;

class Handler implements CommandHandler{

	/**
	 * @var UserRepo
	 */
	private $userRepo;

	public function __construct(UserRepo $userRepo)
	{

		$this->userRepo = $userRepo;
	}
	
	/**
	 * Handle the command
	 *
	 * @param $command
	 * @return mixed
	 */
	public function handle($command)
	{
		return $this->userRepo->create($command->email, $command->password);
	}
}