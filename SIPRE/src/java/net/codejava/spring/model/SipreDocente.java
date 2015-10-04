/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import javax.persistence.EmbeddedId;
import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.JoinColumns;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author DIEGO
 */
@Entity
@Table(name = "SIPRE_DOCENTE")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreDocente.findAll", query = "SELECT s FROM SipreDocente s")})
public class SipreDocente implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SipreDocentePK sipreDocentePK;
    @JoinColumns({
        @JoinColumn(name = "CESCALA_CODIGO", referencedColumnName = "CESCALA_CODIGO", insertable = false, updatable = false),
        @JoinColumn(name = "CESCALA_HORA", referencedColumnName = "CESCALA_HORA", insertable = false, updatable = false)})
    @ManyToOne(optional = false)
    private SipreEscala sipreEscala;

    public SipreDocente() {
    }

    public SipreDocente(SipreDocentePK sipreDocentePK) {
        this.sipreDocentePK = sipreDocentePK;
    }

    public SipreDocente(String cpersonaNroAdm, String cescalaCodigo, String cescalaHora) {
        this.sipreDocentePK = new SipreDocentePK(cpersonaNroAdm, cescalaCodigo, cescalaHora);
    }

    public SipreDocentePK getSipreDocentePK() {
        return sipreDocentePK;
    }

    public void setSipreDocentePK(SipreDocentePK sipreDocentePK) {
        this.sipreDocentePK = sipreDocentePK;
    }

    public SipreEscala getSipreEscala() {
        return sipreEscala;
    }

    public void setSipreEscala(SipreEscala sipreEscala) {
        this.sipreEscala = sipreEscala;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (sipreDocentePK != null ? sipreDocentePK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreDocente)) {
            return false;
        }
        SipreDocente other = (SipreDocente) object;
        if ((this.sipreDocentePK == null && other.sipreDocentePK != null) || (this.sipreDocentePK != null && !this.sipreDocentePK.equals(other.sipreDocentePK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreDocente[ sipreDocentePK=" + sipreDocentePK + " ]";
    }
    
}
