<?php
// src/Entity/User.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     */
    private $password;

    // Thêm các trường và phương thức set/get cần thiết cho Entity

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    // Các phương thức khác cần thiết cho UserInterface, ví dụ: getRoles, getSalt, eraseCredentials

    public function getRoles()
    {
        // Định nghĩa vai trò (roles) của người dùng
    }

    public function getSalt()
    {
        // Được sử dụng để bảo mật mật khẩu (salt)
    }

    public function eraseCredentials()
    {
        // Xóa bỏ thông tin nhạy cảm sau khi đăng nhập
    }
    public function getUserIdentifier()
    {
        return $this->email;
    }
}