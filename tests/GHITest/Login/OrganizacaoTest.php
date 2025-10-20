<?php
namespace GHITest\Login;

use PHPUnit\Framework\TestCase;
use GHI\Login\Organizacao;
use GHI\Login\Escola;
use GHI\Login\Empresa;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Escola::class)]
#[CoversClass(Empresa::class)]
class OrganizacaoTest extends TestCase
{    
    public function testCriacaoDeObjetos(){        
        $escola = new Escola();
        $empresa = new Empresa();

        $this->assertInstanceOf(Escola::class,$escola);
        $this->assertInstanceOf(Empresa::class,$empresa);
        
        $escola->nome = 'Bento Quirino';
        $escola->email = 'secretaria043@etec.sp.gov.br';
        
        $this->assertEquals('Bento Quirino',$escola->nome);
        $this->assertStringContainsString('etec.sp.gov.br',$escola->email);

        $empresa->nome = 'Bosch';
        $empresa->email = 'diretoria@bosch.de';
        
        $this->assertEquals('Bosch',$empresa->nome);
        $this->assertStringContainsString('@bosch',$empresa->email);


    }
}
