<?php
1.Tambahkan Folder Validator\Constraints Di Bundle Anda.Penamaan folder tidak boleh asal-asalan harus sesuai dengan patten symfony seperti yang saya tuliskan sebelumnya
2.Buat File Baru Di Dalam Folder Tersebut Dengan Pattern Sebagai Berikut
  	ContainsNamaValidatorAnda.php
  	->Sebagai Contoh Lihat Kodingan Dibawah
  	<?php
		namespace BackBundle\Validator\Constraints;
		use Symfony\Component\Validator\Constraint;
		/**
		* @Annotation
		*/
		class ContainsNamaValidatorAnda extends Constraint
		{
				public $message = 'The string "%string%" contains an illegal character: 
								   it can only contain letters or numbers.';
		}
3.Kodingan Diatas Hanya Pesan Yang Dihasilkan Ketika Data Tidak Memenuhi Validasi;
4.Buat File Baru Didalam Folder Yang Sama Dengan Pattern Sebagai Berikut
	ContainsNamaValidatorAndaValidator.php
	->Sebagai Contoh Lihat Kodingan Dibawah
	<?php
		namespace BackBundle\Validator\Constraints;

		use Symfony\Component\Validator\Constraint;
		use Symfony\Component\Validator\ConstraintValidator;

		/**
		* @Annotation
		*/
		class ContainsNamaValidatorAndaValidator extends ConstraintValidator
		{
				public function validate($value, Constraint $constraint)
				{
					if (!preg_match('/^[a-zA-Z0-9]+$/', $value, $matches)) 
					{
						$this->context->buildViolation($constraint->message)
									  ->setParameter('%string%', $value)
									  ->addViolation();

					}
				}
		}
5.Import Validator Yang Anda Buat Di Class Entity Yang Ingin Anda Validasi,Dalam Hal Ini Saya Ambil Entity Product
	<?php
		namespace EntityBundle\Entity;

		use Doctrine\ORM\Mapping as ORM;
		use Symfony\Component\Validator\Constraints as Assert;

		use BackBundle\Validator\Constraints as AliasYangAndaInginkan;
		class Product
		{
		    //Kodingan Anda Sebelumnya

		    /**
		     * @var integer
		     *
		     * @ORM\Column(name="on_stock", type="integer", nullable=false, options={"default":500})
		     * @JMSSerializer\Expose
		     * @Assert\NotBlank(message="Stock Tidak Boleh Kosong")
		     * @AliasYangAndaInginkan\ContainsNamaValidatorAndaValidator
		     */
		    private $onStock;

		    //Kodingan Anda Selanjutnya
		}