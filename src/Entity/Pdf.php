<?php
    
namespace App\Entity;
    
use App\Repository\PdfRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PdfRepository::class)]

class Pdf
{
        #[ORM\Id]
        #[ORM\GeneratedValue]
        #[ORM\Column]
        private ?int $id = null;

        #[ORM\Column]
        private ?\DateTimeImmutable $createdAt = null;

        #[ORM\ManyToOne(inversedBy: 'pdfs')]
        private ?User $user = null;

        #[ORM\Column(length: 255)]
        private ?string $title = null;

        #[ORM\Column(length: 255)]
        private ?string $filePath = null;

        public function getId(): ?int
        {
            return $this->id;
        }

        public function getCreatedAt(): ?\DateTimeImmutable
        {
            return $this->createdAt;
        }

        public function setCreatedAt(\DateTimeImmutable $createdAt): static
        {
            $this->createdAt = $createdAt;

            return $this;
        }

        public function getUserId(): ?User
        {
            return $this->user;
        }

        public function setUserId(?User $user): static
        {
            $this->user = $user;

            return $this;
        }

        public function getTitle(): ?string
        {
            return $this->title;
        }

        public function setTitle(string $title): static
        {
            $this->title = $title;

            return $this;
        }

        public function getFilePath(): ?string
        {
            return $this->filePath;
        }

        public function setFilePath(string $filePath): static
        {
            $this->filePath = $filePath;

            return $this;
        }
    }
