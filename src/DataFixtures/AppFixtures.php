<?php

namespace App\DataFixtures;

use App\Entity\Post;
use App\Entity\User;
use App\Entity\UserPreferences;
use App\Repository\UserRepository;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $userPasswordHasher;

    private $userRepository;

    private const USERS = [
        [
            'username' => 'john_doe',
            'email' => 'john_doe@doe.com',
            'password' => 'john123',
            'fullName' => 'John Doe',
            'roles' => [User::ROLE_USER]
        ],
        [
            'username' => 'rob_smith',
            'email' => 'rob_smith@smith.com',
            'password' => 'rob12345',
            'fullName' => 'Rob Smith',
            'roles' => [User::ROLE_USER]
        ],
        [
            'username' => 'marry_gold',
            'email' => 'marry_gold@gold.com',
            'password' => 'marry12345',
            'fullName' => 'Marry Gold',
            'roles' => [User::ROLE_USER]
        ],
        [
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'admin12345',
            'fullName' => 'Admin',
            'roles' => [User::ROLE_ADMIN]
        ],        
    ];

    private const POST_TEXT = [
        'Hello, how are you?',
        'It`s nice sunny weather today',
        'I need to buy some ice cream!',
        'I wanna buy a new car',
        'There`s a problem with my phone',
        'I need to go to the doctor',
        'What are you up to today?',
        'Did you watch the game yesterday?',
        'How was your day?'
    ];  
    
    private const LANGUAGES = [
        'en', 
        'ru'
    ];

    public function __construct(UserPasswordHasherInterface $userPasswordHasher, UserRepository $userRepository) 
    {
        $this->userPasswordHasher = $userPasswordHasher;
        $this->userRepository = $userRepository;
    } 

    public function load(ObjectManager $manager): void
    {
        $this->loadUsers($manager);
        $this->loadPosts($manager);
    }
   
    public function loadUsers(ObjectManager $manager): void
    {      
        foreach (self::USERS as $userData) {
            $user = new User(); 
            $user->setUsername($userData["username"]);
            $user->setEmail($userData["email"]);
            $user->setFullName($userData["fullName"]);
            $hashedPassword = $this->userPasswordHasher->hashPassword(
                $user, 
                $userData["password"]
            );
            $user->setPassword($hashedPassword);

            $user->setRoles($userData["roles"]);

            $user->setIsEnabled(true);

            $preferences = new UserPreferences();
            $preferences->setLocale(self::LANGUAGES[rand(0, 1)]);

            $user->setPreferences($preferences);

            $this->addReference($userData["username"], $user);

            $manager->persist($user);
        }
        $manager->flush();

    }    
    
    public function loadPosts(ObjectManager $manager): void
    {
        for ($i = 0; $i < 30; $i ++) {
            $post = new Post();

            $random_text = self::POST_TEXT[rand(0, count(self::POST_TEXT) - 1)];
            $post->setText($random_text);
            
            $date = new \DateTime();
            $date->modify("-" . rand(0, 10) . 'day');
            
            $post->setCreatedAt($date->format("Y-m-d H:i:s"));

            $username = self::USERS[rand(0, count(self::USERS) - 1)]["username"];
            $post->setUser($this->getReference($username));

            $manager->persist($post);           
        }
        $manager->flush();
    }     
}
