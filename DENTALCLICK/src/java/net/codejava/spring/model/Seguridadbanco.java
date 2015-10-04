/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;

/**
 *
 * @author DIEGO
 */
@Entity
@NamedQueries({
    @NamedQuery(name = "Seguridadbanco.findAll", query = "SELECT s FROM Seguridadbanco s")})
public class Seguridadbanco implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CBANCO_CODIGO")
    private String cbancoCodigo;
    @Column(name = "CBANCO_ESTADO")
    private String cbancoEstado;
    @Column(name = "VBANCO_DSC")
    private String vbancoDsc;

    public Seguridadbanco() {
    }

    public Seguridadbanco(String cbancoCodigo) {
        this.cbancoCodigo = cbancoCodigo;
    }

    public String getCbancoCodigo() {
        return cbancoCodigo;
    }

    public void setCbancoCodigo(String cbancoCodigo) {
        this.cbancoCodigo = cbancoCodigo;
    }

    public String getCbancoEstado() {
        return cbancoEstado;
    }

    public void setCbancoEstado(String cbancoEstado) {
        this.cbancoEstado = cbancoEstado;
    }

    public String getVbancoDsc() {
        return vbancoDsc;
    }

    public void setVbancoDsc(String vbancoDsc) {
        this.vbancoDsc = vbancoDsc;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cbancoCodigo != null ? cbancoCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Seguridadbanco)) {
            return false;
        }
        Seguridadbanco other = (Seguridadbanco) object;
        if ((this.cbancoCodigo == null && other.cbancoCodigo != null) || (this.cbancoCodigo != null && !this.cbancoCodigo.equals(other.cbancoCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.Seguridadbanco[ cbancoCodigo=" + cbancoCodigo + " ]";
    }
    
}
