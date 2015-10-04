/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Embeddable;

/**
 *
 * @author DIEGO
 */
@Embeddable
public class SipreUsuarioRolPK implements Serializable {
    @Basic(optional = false)
    @Column(name = "CUSUARIO_CODIGO")
    private String cusuarioCodigo;
    @Basic(optional = false)
    @Column(name = "CROL_CODIGO")
    private String crolCodigo;

    public SipreUsuarioRolPK() {
    }

    public SipreUsuarioRolPK(String cusuarioCodigo, String crolCodigo) {
        this.cusuarioCodigo = cusuarioCodigo;
        this.crolCodigo = crolCodigo;
    }

    public String getCusuarioCodigo() {
        return cusuarioCodigo;
    }

    public void setCusuarioCodigo(String cusuarioCodigo) {
        this.cusuarioCodigo = cusuarioCodigo;
    }

    public String getCrolCodigo() {
        return crolCodigo;
    }

    public void setCrolCodigo(String crolCodigo) {
        this.crolCodigo = crolCodigo;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cusuarioCodigo != null ? cusuarioCodigo.hashCode() : 0);
        hash += (crolCodigo != null ? crolCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreUsuarioRolPK)) {
            return false;
        }
        SipreUsuarioRolPK other = (SipreUsuarioRolPK) object;
        if ((this.cusuarioCodigo == null && other.cusuarioCodigo != null) || (this.cusuarioCodigo != null && !this.cusuarioCodigo.equals(other.cusuarioCodigo))) {
            return false;
        }
        if ((this.crolCodigo == null && other.crolCodigo != null) || (this.crolCodigo != null && !this.crolCodigo.equals(other.crolCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreUsuarioRolPK[ cusuarioCodigo=" + cusuarioCodigo + ", crolCodigo=" + crolCodigo + " ]";
    }
    
}
